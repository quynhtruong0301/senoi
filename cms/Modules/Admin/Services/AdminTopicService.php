<?php

namespace Cms\Modules\Admin\Services;

use Cms\Modules\Admin\Services\Contracts\AdminTopicServiceContract;
use Cms\Modules\Core\Services\CoreTopicService;
use Cms\Modules\Admin\Repositories\Contracts\AdminTopicRepositoryContract;

class AdminTopicService extends CoreTopicService implements AdminTopicServiceContract
{
	protected $repository;

	function __construct(AdminTopicRepositoryContract $repository)
	{
	    parent::__construct($repository);

	    $this->repository = $repository;
	}
}

