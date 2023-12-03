<?php

namespace Cms\Modules\Core\Repositories;

use Cms\Modules\Core\Repositories\Contracts\CoreAttributeRepositoryContract;
use Cms\Modules\Core\Models\Attribute;

class CoreAttributeRepository implements CoreAttributeRepositoryContract
{
    protected $model;

    public function __construct(Attribute $model) {
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

    public function getWithSearchPaginate($record, $data)
    {
        $type = $data->type ? $data->type : null;
        $public = $data->public ? $data->public : null;

        $result = $this->model;

        if ($type) {
            $result = $result->whereIn('type', $type);
        }

        if ($public) {
            $result = $result->whereIn('public', $public);
        }

        $result = $result->paginate($record);

        return $result;
    }
}

