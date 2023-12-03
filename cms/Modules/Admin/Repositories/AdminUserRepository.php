<?php

namespace Cms\Modules\Admin\Repositories;

use Cms\Modules\Admin\Repositories\Contracts\AdminUserRepositoryContract;
use Cms\Modules\Core\Repositories\CoreUserRepository;

class AdminUserRepository extends CoreUserRepository implements AdminUserRepositoryContract
{
    public function getAllCustomerPaginate($data){
        return $this->model->whereHas('roles', function ($q) {
            $q->where('name', 'user');
        })->paginate($data);
    }
}

