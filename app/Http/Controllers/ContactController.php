<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
class ContactController extends Controller
{

  public function store(Request $request)
  {
    $data = $request->validate([
        'name'=> 'required|min:6',
        'email'=> 'required | email',
        'message'=> 'required | max:200 '
    ]);

    Contact::create($data);
    Mail::to('test@test.com')->send(new ContactFormMail($data));
    return response()->json(['success'=>'Ajax request submitted successfully']);
  }

}
