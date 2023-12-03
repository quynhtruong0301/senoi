<?php

namespace Cms\Modules\Admin\Services;

use Cms\Modules\Admin\Services\Contracts\AdminCoinLogServiceContract;
use Cms\Modules\Core\Services\CoreCoinLogService;
use Cms\Modules\Admin\Repositories\Contracts\AdminCoinLogRepositoryContract;

class AdminCoinLogService extends CoreCoinLogService implements AdminCoinLogServiceContract
{
	protected $repository;

	function __construct(AdminCoinLogRepositoryContract $repository)
	{
	    parent::__construct($repository);

	    $this->repository = $repository;
	}
}

