<?php

namespace Cms\Modules\Core\Repositories;

use Cms\Modules\Core\Repositories\Contracts\CoreContactRepositoryContract;
use Cms\Modules\Core\Models\Contact;

class CoreContactRepository implements CoreContactRepositoryContract
{
    protected $model;

    public function __construct(Contact $model) {
        $this->model = $model;
    }
}

