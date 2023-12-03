<?php

namespace Cms\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Cms\Modules\Admin\Services\Contracts\AdminUserServiceContract;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    protected $service;
    /**
     * @var AdminUserServiceContract
     */
    protected $userService;

    public function __construct(AdminUserServiceContract $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $users = $this->userService->getAllCustomerPaginate(10);

        return view('Admin::user.index', compact('users'));
    }

    public function delete($id)
    {
        try {
            $this->userService->delete($id);

            return response()->json([
                'status' => 200,
                'errors' => false,
                'message' => 'Delete product success',
            ]);
        } catch (\Exception $err) {

            return response()->json([
                'status' => 500,
                'errors' => true,
                'message' => $err->getMessage()
            ]);
        }
    }
}

