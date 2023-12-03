<?php

namespace Cms\Modules\Admin\Services;

use Cms\Modules\Admin\Services\Contracts\AdminUserServiceContract;
use Cms\Modules\Core\Services\CoreUserService;
use Cms\Modules\Admin\Repositories\Contracts\AdminUserRepositoryContract;

class AdminUserService extends CoreUserService implements AdminUserServiceContract
{
    protected $repository;

    function __construct(AdminUserRepositoryContract $repository)
    {
        parent::__construct($repository);

        $this->repository = $repository;
    }

    public function authenticate($data)
    {
        $credentials = [
            'email' => $data->email,
            'password' => $data->password
        ];

        if (!auth()->attempt($credentials)) {
            return redirect()->back()->with('login-error', 'Thông tin đăng nhập chưa chính xác!');
        }

        return redirect()->route('cms.dashboard');
    }

    public function getAllCustomerPaginate($data)
    {
        return $this->repository->getAllCustomerPaginate($data);
    }
}

