<?php

namespace Cms\Modules\Admin\Services;

use Cms\Modules\Admin\Services\Contracts\AdminCategoryServiceContract;
use Cms\Modules\Core\Services\CoreCategoryService;
use Cms\Modules\Admin\Repositories\Contracts\AdminCategoryRepositoryContract;

class AdminCategoryService extends CoreCategoryService implements AdminCategoryServiceContract
{
	protected $repository;

	function __construct(AdminCategoryRepositoryContract $repository)
	{
	    parent::__construct($repository);

	    $this->repository = $repository;
	}
}

