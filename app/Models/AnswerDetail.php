<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnswerDetail extends Model
{
    protected $guarded = [] ;



    // public function question()
    // {
    //     return $this->belongsTo(Question::class);
    // }


    // public function responses()
    // {
    //     return $this->hasMany(SurveyResponse::class);
    // }

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }
}
