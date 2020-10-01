<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $guarded = [] ;

    public function questionare()
    {
        return $this->belongsTo(Questionare::class);
    }

    public function responses()
    {
        return $this->hasMany(SurveyResponse::class);
    }

    public function answer_details()
    {
        return $this->hasMany(AnswerDetail::class);
    }
}
