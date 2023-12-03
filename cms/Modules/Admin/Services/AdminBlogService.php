<?php

namespace Cms\Modules\Admin\Services;

use Cms\Modules\Admin\Services\Contracts\AdminBlogServiceContract;
use Cms\Modules\Core\Services\CoreBlogService;
use Cms\Modules\Admin\Repositories\Contracts\AdminBlogRepositoryContract;

class AdminBlogService extends CoreBlogService implements AdminBlogServiceContract
{
	protected $repository;

	function __construct(AdminBlogRepositoryContract $repository)
	{
	    parent::__construct($repository);

	    $this->repository = $repository;
	}
}

