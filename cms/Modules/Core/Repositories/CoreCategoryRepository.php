<?php

namespace Cms\Modules\Core\Repositories;

use Cms\Modules\Core\Repositories\Contracts\CoreCategoryRepositoryContract;
use Cms\Modules\Core\Models\Category;

class CoreCategoryRepository implements CoreCategoryRepositoryContract
{
    protected $model;

    public function __construct(Category $model) {
        $this->model = $model;
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
}

