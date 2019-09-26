<?php

namespace App\Http\Controllers;

use App\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ContactController extends Controller
{
    public function getContact(){
        return view('client.contact');
    }

    public function saveContact(Request $request){
        $data = $request->except('_token');
        $data['created_at'] = $data['updated_at'] = Carbon::now();
        Contact::insert($data);

        return redirect()->back();
    }
    public function destroyMultiple(Request $request)
    {
        Contact::destroy(Input::get('ids'));
        return Input::get('ids');
    }
}
