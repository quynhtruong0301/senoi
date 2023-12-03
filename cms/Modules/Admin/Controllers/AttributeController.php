<?php

namespace Cms\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Cms\Modules\Admin\Requests\Attribute\CreateRequest;
use Cms\Modules\Admin\Requests\Attribute\EditRequest;
use Cms\Modules\Admin\Services\Contracts\AdminAttributeServiceContract;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    protected $attributeService;

    public function __construct
    (
        AdminAttributeServiceContract $attributeService
    )
    {
        $this->attributeService = $attributeService;
    }

    public function index(Request $request)
    {
        $attributes = $this->attributeService->getWithSearchPaginate(10, $request);

        return view('Admin::attribute.index', compact('attributes'));
    }

    public function create()
    {
        return view('Admin::attribute.create');
    }

    public function store(CreateRequest $request)
    {
        $data['type'] = $request->type;
        $data['value'] = $request->value;
        $data['display_name'] = $request->display_name;
        $data['public'] = $request->public;

        $this->attributeService->store($data);

        return redirect()->route('admin.attribute.index')->with(['success' => 'Tạo mới thuộc tính thành công!']);
    }

    public function edit($id)
    {
        $attribute = $this->attributeService->find($id);

        return view('Admin::attribute.edit', compact('attribute'));
    }

    public function update(EditRequest $request, $id)
    {
        $data['type'] = $request->type;
        $data['value'] = $request->value;
        $data['display_name'] = $request->display_name;
        $data['public'] = $request->public;

        $this->attributeService->update($id, $data);

        return redirect()->route('admin.attribute.index')->with(['success' => 'Cập nhật thuộc tính thành công!']);
    }

    public function delete($id)
    {
        $this->attributeService->delete($id);

        return response()->json([
            'status' => 200,
            'errors' => false,
            'message' => 'Delete success',
        ], 200);
    }
}
