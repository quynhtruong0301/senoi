<?php

namespace Cms\Modules\Core\Repositories\Contracts;


interface CoreAttributeRepositoryContract
{
    public function getAll();

    public function paginate($data);

    public function store($data);

    public function find($id);

    public function update($id, $data);

    public function delete($id);

    public function getWithSearchPaginate($record, $data);
}

