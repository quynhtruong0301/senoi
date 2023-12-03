<?php

namespace Cms\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Cms\Modules\Admin\Services\Contracts\AdminTopicServiceContract;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    protected $topicService;

    public function __construct
    (
        AdminTopicServiceContract $topicService
    )
    {
        $this->topicService = $topicService;
    }

    public function index()
    {
        $topics = $this->topicService->paginate(10);

        return view('Admin::topic.index', compact('topics'));
    }

    public function create()
    {
        return view('Admin::topic.create');
    }

    public function store(Request $request)
    {
        $data['name'] = $request->name;
        $data['slug'] = $request->slug;

        $this->topicService->store($data);

        return redirect()->route('admin.topic.index')->with(['success' => 'Tạo mới topic thành công!']);
    }

    public function edit($id)
    {
        $topic = $this->topicService->find($id);

        return view('Admin::topic.edit', compact('topic'));
    }

    public function update(Request $request, $id)
    {
        $data['name'] = $request->name;
        $data['slug'] = $request->slug;;

        $this->topicService->update($id, $data);

        return redirect()->route('admin.topic.index')->with(['success' => 'Cập nhật topic thành công!']);
    }

    public function delete($id)
    {
        $this->topicService->delete($id);

        return response()->json([
            'status' => 200,
            'errors' => false,
            'message' => 'Delete success',
        ], 200);
    }
}
