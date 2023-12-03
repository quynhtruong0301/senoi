<?php

namespace Cms\Modules\Admin\Services\Contracts;

use Cms\Modules\Core\Services\Contracts\CoreUserServiceContract;

interface AdminUserServiceContract extends CoreUserServiceContract
{
    public function authenticate($data);

    public function getAllCustomerPaginate($data);
}
