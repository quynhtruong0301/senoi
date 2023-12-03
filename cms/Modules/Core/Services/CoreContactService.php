<?php

namespace Cms\Modules\Core\Services;

use Cms\Modules\Core\Services\Contracts\CoreContactServiceContract;
use Cms\Modules\Core\Repositories\Contracts\CoreContactRepositoryContract;

class CoreContactService implements CoreContactServiceContract
{
	protected $repository;

	function __construct(CoreContactRepositoryContract $repository)
	{
	    $this->repository = $repository;
	}
}

