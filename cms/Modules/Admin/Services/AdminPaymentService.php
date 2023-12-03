<?php

namespace Cms\Modules\Admin\Services;

use Cms\Modules\Admin\Services\Contracts\AdminPaymentServiceContract;
use Cms\Modules\Core\Services\CorePaymentService;
use Cms\Modules\Admin\Repositories\Contracts\AdminPaymentRepositoryContract;

class AdminPaymentService extends CorePaymentService implements AdminPaymentServiceContract
{
	protected $repository;

	function __construct(AdminPaymentRepositoryContract $repository)
	{
	    parent::__construct($repository);

	    $this->repository = $repository;
	}
}

