<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class FileName extends Model
{
    protected $fillable = [
        'fileid',
        'filename',
        ];
        public function item()
        {
        return $this->hasMany('App\MainForm');
        }       
}
