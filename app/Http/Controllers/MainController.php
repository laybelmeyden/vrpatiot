<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MainForm;

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

     back()->with('message_1', 'Ваш вопрос отправлен куратору конкурса и в ближайшее время мы свяжемся с вами, чтобы ответить на него!');
     return redirect('/')->with('message', 'СПАСИБО ЗА ВАШУ АКТИВНОСТЬ И ИНТЕРЕС К КОНКУРСУ!');
    }
    public function main_form(Request $request)
      {
        if ( $request -> hasFile('app')){

          MainForm::create([
          'fio' => request('fio'),
          'day' => request('day'),
          'mouth' => request('mouth'),
          'years' => request('years'),
          'email' => request('email'),
          'phone' => request('phone'),
          'vk' => request('vk'),
          'facebook' => request('facebook'),
          'instagram' => request('instagram'),
          'city' => request('city'),
          'edu' => request('edu'),
          'name_project' => request('name_project'),
          'select_mon' => request('select_mon'),
          'opis_proj' => request('opis_proj'),
          'name_team' => request('name_team'),
          'email_team' => request('email_team'),
          'role_team' => request('role_team'),
          'phone_team' => request('phone_team'),
          'name_team_1' => request('name_team_1'),
          'email_team_1' => request('email_team_1'),
          'role_team_1' => request('role_team_1'),
          'phone_team_1' => request('phone_team_1'),
          'drop_box_file' => request('drop_box_file'),
          'google_file' => request('google_file'),
          'app' => request('app')-> store('upload'),
          ]
          );
          
            $request -> app -> store('public/upload');
            
          } else {
            MainForm::create([
            'fio' => request('fio'),
            'day' => request('day'),
            'mouth' => request('mouth'),
            'years' => request('years'),
            'email' => request('email'),
            'phone' => request('phone'),
            'vk' => request('vk'),
            'facebook' => request('facebook'),
            'instagram' => request('instagram'),
            'city' => request('city'),
            'edu' => request('edu'),
            'name_project' => request('name_project'),
            'select_mon' => request('select_mon'),
            'opis_proj' => request('opis_proj'),
            'name_team' => request('name_team'),
            'email_team' => request('email_team'),
            'role_team' => request('role_team'),
            'phone_team' => request('phone_team'),
            'name_team_1' => request('name_team_1'),
            'email_team_1' => request('email_team_1'),
            'role_team_1' => request('role_team_1'),
            'phone_team_1' => request('phone_team_1'),
            'drop_box_file' => request('drop_box_file'),
            'google_file' => request('google_file'),
            'app' => request('app'),
              ]
              );}
      $data= array(
        'fio' => request('fio'),
          'day' => request('day'),
          'mouth' => request('mouth'),
          'years' => request('years'),
          'email' => request('email'),
          'phone' => request('phone'),
          'vk' => request('vk'),
          'facebook' => request('facebook'),
          'instagram' => request('instagram'),
          'city' => request('city'),
          'edu' => request('edu'),
          'name_project' => request('name_project'),
          'select_mon' => request('select_mon'),
          'opis_proj' => request('opis_proj'),
          'name_team' => request('name_team'),
          'email_team' => request('email_team'),
          'role_team' => request('role_team'),
          'phone_team' => request('phone_team'),
          'name_team_1' => request('name_team_1'),
          'email_team_1' => request('email_team_1'),
          'role_team_1' => request('role_team_1'),
          'phone_team_1' => request('phone_team_1'),
          'drop_box_file' => request('drop_box_file'),
          'google_file' => request('google_file'),
          'app' => request('app')
      );
      back()->with('message_1', 'После обработки вашей анкеты, мы свяжемся с вами.');
      return redirect('/')->with('message', 'ВАША ЗАЯВКА ОТПРАВЛЕНА!');
    }

}
