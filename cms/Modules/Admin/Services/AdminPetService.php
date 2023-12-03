<?php

namespace Cms\Modules\Admin\Services;

use Cms\Modules\Admin\Services\Contracts\AdminPetServiceContract;
use Cms\Modules\Core\Services\CorePetService;
use Cms\Modules\Admin\Repositories\Contracts\AdminPetRepositoryContract;

class AdminPetService extends CorePetService implements AdminPetServiceContract
{
	protected $repository;

	function __construct(AdminPetRepositoryContract $repository)
	{
	    parent::__construct($repository);

	    $this->repository = $repository;
	}
}

