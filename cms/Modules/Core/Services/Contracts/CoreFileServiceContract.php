<?php

namespace Cms\Modules\Core\Services\Contracts;

interface CoreFileServiceContract
{
    public function handleFileStore($file, $folder);
}

