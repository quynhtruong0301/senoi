<?php

namespace Cms\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Cms\Modules\Admin\Services\Contracts\AdminBannerServiceContract;
use Cms\Modules\Core\Services\Contracts\CoreFileServiceContract;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    protected $bannerService;
    protected $fileService;

    public function __construct
    (
        AdminBannerServiceContract $bannerService,
        CoreFileServiceContract $fileService
    )
    {
        $this->bannerService = $bannerService;
        $this->fileService = $fileService;
    }

    public function index()
    {
        $banners = $this->bannerService->paginate(10);

        return view('Admin::banner.index', compact('banners'));
    }

    public function create()
    {
        return view('Admin::banner.create');
    }

    public function store(Request $request)
    {
        $data['start_date'] = $request->start_date;
        $data['end_date'] = $request->end_date;
        $data['public'] = $request->public;
        $data['url'] = $this->fileService->handleFileStore($request->image, 'banner');

        $this->bannerService->store($data);

        return redirect()->route('admin.banner.index')->with(['success' => 'Tạo mới banner thành công!']);
    }

    public function edit($id)
    {
        $banner = $this->bannerService->find($id);

        return view('Admin::banner.edit', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $banner = $this->bannerService->find($id);

        $data['start_date'] = $request->start_date;
        $data['end_date'] = $request->end_date;
        $data['public'] = $request->public;
        if ($request->hasFile('image')) {
            $data['url'] = $this->fileService->handleFileStore($request->image, 'banner');
        } else {
            $data['url'] = $banner->url;
        }

        $this->bannerService->update($id, $data);

        return redirect()->route('admin.banner.index')->with(['success' => 'Cập nhật banner thành công!']);
    }

    public function delete($id)
    {
        $this->bannerService->delete($id);

        return response()->json([
            'status' => 200,
            'errors' => false,
            'message' => 'Delete success',
        ], 200);
    }
}
