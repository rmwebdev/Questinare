<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = [] ;


    public function questionnaire()
    {
        return $this->belongsTo(Questionare::class);
    }

    public function answers()
    {
        return $this->hasMany(AnswerDetail::class);
    }
    public function responses()
    {
        return $this->hasMany(SurveyResponse::class);
    }
}
