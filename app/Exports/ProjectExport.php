<?php

namespace App\Exports;

use App\MainForm;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ProjectExport implements FromCollection, WithHeadings, ShouldAutoSize
{
  /**
   * @return \Illuminate\Support\Collection
   */

  public function headings(): array
  {
    return [
      "Номер проекта",
      "ФИО",
      "День",
      "Месяц",
      "Год",
      "Почта",
      "Телефон",
      "ВК",
      "ФБ",
      "ИНСТ",
      "Город",
      "Образование",
      "Название проекта",
      "Номинация",
      "Краткое описание проекта",
      "Команда фио 1",
      "Команда почта 1",
      "Команда роль 1",
      "Команда телефон 1",
      "Команда фио 2",
      "Команда почта 2",
      "Команда роль 2",
      "Команда телефон 2",
    ];
  }

  public function collection()
  {
    return MainForm::select(
      'id',
      'fio',
      'day',
      'mouth',
      'years',
      'email',
      'phone',
      'vk',
      'facebook',
      'instagram',
      'city',
      'edu',
      'name_project',
      'select_mon',
      'opis_proj',
      'name_team',
      'email_team',
      'role_team',
      'phone_team',
      'name_team_1',
      'email_team_1',
      'role_team_1',
      'phone_team_1'
    )->get();
  }
}
