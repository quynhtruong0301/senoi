<?php

namespace Cms\Modules\Admin\Services;

use Cms\Modules\Admin\Services\Contracts\AdminContactServiceContract;
use Cms\Modules\Core\Services\CoreContactService;
use Cms\Modules\Admin\Repositories\Contracts\AdminContactRepositoryContract;

class AdminContactService extends CoreContactService implements AdminContactServiceContract
{
	protected $repository;

	function __construct(AdminContactRepositoryContract $repository)
	{
	    parent::__construct($repository);

	    $this->repository = $repository;
	}
}

