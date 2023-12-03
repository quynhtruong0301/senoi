<?php

namespace Cms\Modules\Core\Services;

use Cms\Modules\Core\Services\Contracts\CoreTopicServiceContract;
use Cms\Modules\Core\Repositories\Contracts\CoreTopicRepositoryContract;

class CoreTopicService implements CoreTopicServiceContract
{
	protected $repository;

	function __construct(CoreTopicRepositoryContract $repository)
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

