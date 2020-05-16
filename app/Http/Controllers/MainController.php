<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MainForm;
use App\FileName;
use Excel;
use App\Exports\ProjectExport;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
  public function index()
  {
    $mainforms = MainForm::latest()->get();
    return view('pages.main', compact('mainforms'));
  }
  public function programm()
  {
    return view('pages.programm');
  }
  public function result()
  {
    $items = FileName::all();
    $mainforms = MainForm::all();
    return view('pages.result', compact('mainforms', 'items'));
  }
  public function contact(Request $request)
  {
    $data = array(
      'contact_email' => request('contact_email'),
      'phone' => request('phone'),
      'text_contact' => request('text_contact'),
    );

    $to_email = env('MAIL_ADMIN_CONTACT');
    Mail::send('email.mailmain', $data, function ($message) use ($data, $to_email) {
      $message->from($to_email, $data['contact_email'], $data['phone'], $data['text_contact']);
      $message->to($to_email)->subject('Сообщение с сайта');
  });

    back()->with('message_1', 'Ваш вопрос отправлен куратору форума и в ближайшее время мы свяжемся с вами, чтобы ответить на него!');
    return redirect('/')->with('message', 'СПАСИБО ЗА ВАШУ АКТИВНОСТЬ И ИНТЕРЕС!');
  }
  public function main_form(Request $request)
  {
    if ($request->hasFile('photos')) {

      $items = MainForm::create($request->all());

      foreach ($request->photos as $photo) {
        $photo->store('public/upload');
        FileName::create([
          'fileid' => $items->id,
          'filename' => $photo->store('upload'),
        ]);
      }
      back()->with('message_1', 'После обработки вашей анкеты, мы свяжемся с вами.');
      return redirect('/')->with('message', 'ВАША ЗАЯВКА ОТПРАВЛЕНА!');
    } else {
      back()->with('message_1', 'Пожалуйста, прикрепите файл к заявке!');
      return redirect('/')->with('message', 'ВАША ЗАЯВКА НЕ БЫЛА ОТПРАВЛЕНА!');
    }
  }

  public function update_main_form(Request $request)
  {
    return "oks";
  }
  public function excel_export()
    {
        return Excel::download(new ProjectExport, 'projects.xlsx');
    }
}
