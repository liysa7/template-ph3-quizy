<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyDate extends Model
{
    use HasFactory;

    public function studydate()
    {
        return $this->hasMany('App\Models\StudyDate');
    }
}
