<?php

namespace Cms\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Cms\Modules\Admin\Services\Contracts\AdminPetServiceContract;
use Illuminate\Http\Request;

class PetController extends Controller
{
    protected $petService;

    public function __construct
    (
        AdminPetServiceContract $petService
    )
    {
        $this->petService = $petService;
    }

    public function index(Request $request)
    {
        $pets = $this->petService->paginate(10);

        return view('Admin::pet.index', compact('pets'));
    }

    public function detail($id)
    {

    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function edit($id)
    {

    }

    public function update()
    {

    }

    public function delete($id)
    {

    }
}
