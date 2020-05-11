@extends('layouts.master')

@section('content')

<div class="container">
<div class="row">
<h1>Заявки поданные на конкурс</h1>

@foreach ($mainforms as $mainform)
        <div class="col s12">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
            <span>Номер проекта = {{ $mainform -> id}}</span>
            <span class="card-title">Название проекта = {{ $mainform -> name_project}}</span>
              <p>
              ФИО = {{ $mainform -> fio}}<br>
              Дата рождения = {{ $mainform -> day}}.{{ $mainform -> mouth}}.{{ $mainform -> years}}<br>
              EMAIL = {{ $mainform -> email}} <br>
              Телефон = {{ $mainform -> phone}} <br>
              @if ($mainform['vk'] !== null)
              VK = <a href="{{ $mainform -> vk}}">{{ $mainform -> vk}}</a> <br>
              @endif
              @if ($mainform['facebook'] !== null)
              facebook = <a href="{{ $mainform -> facebook}}">{{ $mainform -> facebook}}</a> <br>
              @endif
              @if ($mainform['instagram'] !== null)
              instagram = <a href="{{ $mainform -> instagram}}">{{ $mainform -> instagram}}</a> <br>
              @endif
              Город = {{ $mainform -> city}} <br>
              Образование = {{ $mainform -> edu}} <br>
              Номинация = {{ $mainform -> select_mon}} <br>
              Краткое описание проекта (300 символов)  = {{ $mainform -> opis_proj}} <br>
                <ul>
                <li>
                <h1 style="font-size: 25px;
    margin: 0;
    padding: 10px;">Команда</h1>
                ФИО члена команды 1 = {{ $mainform -> name_team}} <br>
                Почта члена команды 1  = {{ $mainform -> email_team}} <br>
                Роль члена команды 1 = {{ $mainform -> role_team}} <br>
                Телефон члена команды 1 = {{ $mainform -> phone_team}} <br>
                </li>
                </ul>
                @if ($mainform['name_team_1'] || $mainform['email_team_1'] !== null)
                <ul>
                <li>
                <h1 style="font-size: 25px;
    margin: 0;
    padding: 10px;">Доп член команды</h1>
              ФИО члена команды 2 = {{ $mainform -> name_team_1}} <br>
              Почта члена команды 2 = {{ $mainform -> email_team_1}} <br>
              Роль члена команды 2 = {{ $mainform -> role_team_1}} <br>
              Телефон члена команды 2 = {{ $mainform -> phone_team_1}} <br>
              </li>
                </ul>
                @endif
              </p>
            </div>
            <div class="card-action">
            @if ($mainform['drop_box_file'] !== null)
            Ссылка на файл в облаке - <a href="{{ $mainform -> drop_box_file}}">{{ $mainform -> drop_box_file}}</a>
            @endif
            </div>
            <div class="card-action">
            Прикрепленные файлы <br>
            @foreach ($items as $item) 
            <a href="{{ asset('storage/'.$item -> filename)}}">{{ asset($item -> filename)}}</a> <br><br>
            @endforeach
            </div>
          </div>
        </div>
@endforeach
      </div>
</div>

@endsection