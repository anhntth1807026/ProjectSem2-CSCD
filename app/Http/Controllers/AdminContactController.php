<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    public function index(){
        $contact = Contact::latest()->paginate(10);
        $viewData = [
            'contact' => $contact
        ];
        return view('admin.contact.index', $viewData);
    }

}
