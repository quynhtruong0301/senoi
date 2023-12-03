<?php

namespace Cms\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Cms\Modules\Admin\Requests\Category\CreateRequest;
use Cms\Modules\Admin\Requests\Category\EditRequest;
use Cms\Modules\Admin\Services\Contracts\AdminCategoryServiceContract;
use Cms\Modules\Core\Services\Contracts\CoreFileServiceContract;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryService;
    protected $fileService;

    public function __construct
    (
        AdminCategoryServiceContract $categoryService,
        CoreFileServiceContract      $fileService
    )
    {
        $this->categoryService = $categoryService;
        $this->fileService = $fileService;
    }

    public function index()
    {
        $categories = $this->categoryService->paginate(10);

        return view('Admin::category.index', compact('categories'));
    }

    public function detail($id)
    {

    }

    public function create()
    {
        return view('Admin::category.create');
    }

    public function store(CreateRequest $request)
    {
        $data['name'] = $request->name;
        $data['slug'] = $request->slug;
        $data['description'] = $request->description;
        $data['public'] = $request->public;
        $data['real_image'] = $this->fileService->handleFileStore($request->real_image, 'category');
        $data['virtual_image'] = $this->fileService->handleFileStore($request->virtual_image, 'category');

        $this->categoryService->store($data);

        return redirect()->route('admin.category.index')->with(['success' => 'Tạo mới danh mục thành công!']);
    }

    public function edit($id)
    {
        $category = $this->categoryService->find($id);

        return view('Admin::category.edit', compact('category'));
    }

    public function update(EditRequest $request, $id)
    {
        $category = $this->categoryService->find($id);

        $data['name'] = $request->name;
        $data['slug'] = $request->slug;
        $data['description'] = $request->description;
        $data['public'] = $request->public;
        if ($request->hasFile('real_image')) {
            $data['real_image'] = $this->fileService->handleFileStore($request->real_image, 'category');
        } else {
            $data['real_image'] = $category->real_image;
        }
        if ($request->hasFile('virtual_image')) {
            $data['virtual_image'] = $this->fileService->handleFileStore($request->virtual_image, 'category');
        } else {
            $data['virtual_image'] = $category->virtual_image;
        }


        $this->categoryService->update($id, $data);

        return redirect()->route('admin.category.index')->with(['success' => 'Chỉnh sửa danh mục thành công!']);
    }

    public function delete($id)
    {
        $this->categoryService->delete($id);

        return response()->json([
            'status' => 200,
            'errors' => false,
            'message' => 'Delete success',
        ], 200);
    }
}
