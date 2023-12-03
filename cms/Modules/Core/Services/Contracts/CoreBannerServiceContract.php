<?php

namespace Cms\Modules\Core\Services\Contracts;

interface CoreBannerServiceContract
{
    public function getAll();

    public function paginate($data);

    public function store($data);

    public function find($id);

    public function update($id, $data);

    public function delete($id);
}

