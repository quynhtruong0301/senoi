<?php

namespace Cms\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Cms\Modules\Core\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::paginate(10);

        return view('Admin::contact.index', compact('contacts'));
    }

    public function delete($id)
    {
        Contact::destroy($id);

        return redirect()->route('admin.contact.index')->with('success', 'Xoá liên hệ thành công!');
    }
}

