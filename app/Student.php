<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function report_card()
    {
        return $this->hasOne('App\Report_card', 'foreign_key');
    }
}
