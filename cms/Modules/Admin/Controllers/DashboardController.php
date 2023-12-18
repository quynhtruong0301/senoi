<?php

namespace Cms\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $userService;

    public function __construct()
    {

    }

    public function index()
    {
        return redirect()->route('admin.category.index');
    }
}
