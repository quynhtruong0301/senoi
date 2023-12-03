<?php

namespace Cms\Modules\Core\Repositories;

use Cms\Modules\Core\Models\User;
use Cms\Modules\Core\Repositories\Contracts\CoreUserRepositoryContract;

class CoreUserRepository implements CoreUserRepositoryContract
{

    protected $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function getAll()
    {
        return $this->model->get();
    }

    public function paginate($data)
    {
        return $this->model->paginate($data);
    }

    public function store($data)
    {
        return $this->model->create($data);
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function update($id, $data)
    {
        $user = $this->model->find($id);

        return $user->update($data);
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    public function findByEmail($data)
    {
        return $this->model->where('email', $data)->first();
    }
}
