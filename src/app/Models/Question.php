<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function big_question()
    {
        return $this->hasMany('App\Models\BigQuestions');
    }

    public function choices()
    {
        return $this->hasMany('App\Models\Choices');
    }

    const UPDATED_AT = null;  
    const CREATED_AT = null;  

    protected $fillable = [  
        'name', 'big_question_id', 'image'
    ]; 


    // public function update($question_Id)
    // {
    //     return $this->where([
    //         'id' => $question_Id['id']
    //     ])->update([
    //         'big_question_id' => $question_Id['big_question_id'],
    //         'name' => $question_Id['name']
    //     ]);
    // }
}

