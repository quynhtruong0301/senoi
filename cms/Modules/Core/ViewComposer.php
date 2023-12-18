<?php

namespace Cms\Modules\Core;

use Cms\Modules\Core\Models\Topic;
use Cms\Modules\Core\Services\Contracts\NotificationServiceContract;
use Illuminate\View\View;

class ViewComposer
{

    protected $topics;

    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct
    (

    )
    {
        $this->topics = Topic::all();
    }

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('globalTopic', $this->topics);
    }
}
