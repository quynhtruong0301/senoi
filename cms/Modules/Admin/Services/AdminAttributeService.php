<?php

namespace Cms\Modules\Admin\Services;

use Cms\Modules\Admin\Services\Contracts\AdminAttributeServiceContract;
use Cms\Modules\Core\Services\CoreAttributeService;
use Cms\Modules\Admin\Repositories\Contracts\AdminAttributeRepositoryContract;

class AdminAttributeService extends CoreAttributeService implements AdminAttributeServiceContract
{
	protected $repository;

	function __construct(AdminAttributeRepositoryContract $repository)
	{
	    parent::__construct($repository);

	    $this->repository = $repository;
	}
}

