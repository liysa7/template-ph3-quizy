<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mst_digit extends Model
{
    use HasFactory;

    public function mst_digit()
    {
        return $this->hasMany('App\Models\Mst_digit');
    }
}
