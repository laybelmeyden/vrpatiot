<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view ('pages.main');
    }
    public function contact(Request $request)
      {
      $data= array(
        'phone' => request('phone'),
        'contact_email' => request('contact_email'),
        'text_contact' => request('text_contact'),
      );

       \Mail::send('email.mailcontact', $data, function($message_contact) use ($data)
    {
        $mail_admin = env('MAIL_ADMIN_CONTACT');
        $message_contact->from($data['contact_email'],$data['phone'], $data['text_contact']);
        $message_contact->to($mail_admin, 'For Admin')->subject('Message from site');
     });
     
     session()->flash('flash message_contact', 'Заявка успешно отправлена !');
     return view('home');
    }
}
