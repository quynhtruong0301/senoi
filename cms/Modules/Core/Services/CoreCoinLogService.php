<?php

namespace Cms\Modules\Core\Services;

use Cms\Modules\Core\Services\Contracts\CoreCoinLogServiceContract;
use Cms\Modules\Core\Repositories\Contracts\CoreCoinLogRepositoryContract;

class CoreCoinLogService implements CoreCoinLogServiceContract
{
	protected $repository;

	function __construct(CoreCoinLogRepositoryContract $repository)
	{
	    $this->repository = $repository;
	}

    public function getAll()
    {
        return $this->repository->getAll();
    }

    public function paginate($data)
    {
        return $this->repository->paginate($data);
    }

    public function store($data)
    {
        return $this->repository->store($data);
    }

    public function find($id)
    {
        return $this->repository->find($id);
    }

    public function update($id, $data)
    {
        return $this->repository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
    }
}

