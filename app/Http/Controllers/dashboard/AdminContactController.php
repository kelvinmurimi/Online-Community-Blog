<?php

declare(strict_types=1);

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    //
    public function index()
    {
        $contact = Contact::latest()->paginate(6);
        return view('admin.contact.index', ['contacts' => $contact]);
    }
}