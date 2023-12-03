<?php

namespace Cms\Modules\Admin\Services;

use Cms\Modules\Admin\Services\Contracts\AdminBannerServiceContract;
use Cms\Modules\Core\Services\CoreBannerService;
use Cms\Modules\Admin\Repositories\Contracts\AdminBannerRepositoryContract;

class AdminBannerService extends CoreBannerService implements AdminBannerServiceContract
{
	protected $repository;

	function __construct(AdminBannerRepositoryContract $repository)
	{
	    parent::__construct($repository);

	    $this->repository = $repository;
	}
}

