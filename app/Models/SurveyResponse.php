<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SurveyResponse extends Model
{
    protected $guarded = [] ;

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }
}
