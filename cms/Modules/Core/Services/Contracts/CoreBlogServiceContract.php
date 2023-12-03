<?php

namespace Cms\Modules\Core\Services\Contracts;

interface CoreBlogServiceContract
{
    public function getAll();

    public function paginate($data);

    public function store($data);

    public function find($id);

    public function update($id, $data);

    public function delete($id);

    public function getWithSearchPaginate($record, $data);
}

