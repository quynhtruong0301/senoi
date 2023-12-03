<?php

namespace Cms\Modules\Core\Services;

use Carbon\Carbon;
use Cms\Modules\Core\Services\Contracts\CoreFileServiceContract;
use Illuminate\Support\Facades\Storage;

class CoreFileService implements CoreFileServiceContract
{
    function __construct()
    {

    }

    public function handleFileStore($file, $folder)
    {
        $disk = 'public';

        $fileName = $folder . Carbon::now()->format('Y-m-d-H-i-s') . rand() . $file->getClientOriginalName();
        $url = '/' . $folder . '/' . $fileName;
        Storage::disk($disk)->putFileAs($folder, $file, $fileName, 'public');

        return $url;
    }
}

