<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
  public function showForm()
  {
  return view('contact');
  }

  public function sendContactInfo(Request $request)
  {
    $data = $request->only('name', 'email', 'phone');
    $data['messageLines'] = explode("\n", $request->get('message'));

    Mail::send('emails.contact', $data, function ($message) use ($data) {
      $message->subject('Blog Contact Form: '.$data['name'])
              ->to(config('blog.contact_email'))
              ->replyTo($data['email']);
    });

    return back()
        ->withSuccess("Thank you for your message. It has been sent.");
  }
}
