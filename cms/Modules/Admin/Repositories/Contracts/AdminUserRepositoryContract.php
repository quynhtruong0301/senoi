<?php

namespace Cms\Modules\Admin\Repositories\Contracts;

use Cms\Modules\Core\Repositories\Contracts\CoreUserRepositoryContract;


interface AdminUserRepositoryContract extends CoreUserRepositoryContract
{
    public function getAllCustomerPaginate($data);
}
