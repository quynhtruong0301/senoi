<?php

namespace Cms\Modules\Core\Repositories;

use Cms\Modules\Core\Repositories\Contracts\CoreBlogRepositoryContract;
use Cms\Modules\Core\Models\Blog;

class CoreBlogRepository implements CoreBlogRepositoryContract
{
    protected $model;

    public function __construct(Blog $model) {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->get();
    }

    public function paginate($data)
    {
        return $this->model->with('topic')->paginate($data);
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
        $topic_id = $data->topic_id ? $data->topic_id : null;
        $public = $data->public ? $data->public : null;

        $result = $this->model;

        if ($topic_id) {
            $result = $result->whereIn('topic_id', $topic_id);
        }

        if ($public) {
            $result = $result->whereIn('public', $public);
        }

        $result = $result->paginate($record);

        return $result;
    }
}

