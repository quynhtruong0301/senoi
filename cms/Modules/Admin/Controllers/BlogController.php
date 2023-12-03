<?php

namespace Cms\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Cms\Modules\Admin\Services\Contracts\AdminBlogServiceContract;
use Cms\Modules\Admin\Services\Contracts\AdminTopicServiceContract;
use Cms\Modules\Core\Models\Blog;
use Cms\Modules\Core\Services\Contracts\CoreFileServiceContract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    protected $topicService;
    /**
     * @var AdminBlogServiceContract
     */
    protected $blogService;
    protected $fileService;

    public function __construct
    (
        AdminBlogServiceContract $blogService,
        AdminTopicServiceContract $topicService,
        CoreFileServiceContract $fileService
    )
    {
        $this->blogService = $blogService;
        $this->topicService = $topicService;
        $this->fileService = $fileService;
    }


    public function index(Request $request)
    {
        $topics = $this->topicService->getAll();
        $blogs = $this->blogService->getWithSearchPaginate(10, $request);

        return view('Admin::blog.index', compact('blogs', 'topics'));
    }

    public function detail($id)
    {

    }

    public function create()
    {
        $topics = $this->topicService->getAll();

        return view('Admin::blog.create', compact('topics'));
    }

    public function store(Request $request)
    {
        $data['topic_id'] = $request->topic_id;
        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['author'] = $request->author;
        $data['public'] = $request->public;
        $data['trending'] = $request->trending;
        $data['content'] = $request->input('content');
        if ($request->image){
            $data['image'] = $this->fileService->handleFileStore($request->image, 'blog');
        } else {
            $data['image'] = '';
        }

        $this->blogService->store($data);

        return redirect()->route('admin.blog.index')->with('success', 'Tạo bài viết mới thành công!');
    }

    public function edit($id)
    {
        $topics = $this->topicService->getAll();
        $blog = $this->blogService->find($id);

        return view('Admin::blog.edit', compact('blog','topics'));
    }

    public function update(Request $request, $id)
    {
        $blog = $this->blogService->find($id);

        $data['topic_id'] = $request->topic_id;
        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['author'] = $request->author;
        $data['public'] = $request->public;
        $data['trending'] = $request->trending;
        $data['content'] = $request->input('content');

        $this->blogService->update($id, $data);

        if ($request->image){
            $data['image'] = $this->fileService->handleFileStore($request->image, 'blog');
        } else {
            $data['image'] = $blog->image;
        }

        $this->blogService->update($id, $data);

        return redirect()->route('admin.blog.index')->with('success', 'Chỉnh sửa bài it mới thành công!');
    }

    public function delete($id)
    {
        $this->blogService->delete($id);

        return response()->json([
            'status' => 200,
            'errors' => false,
            'message' => 'Delete success',
        ], 200);
    }
}

