<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Questionare extends Model
{
    protected $guarded =[];


    public function path()
    {
        return url('admin/questionares/' . $this->id);
    }

    public function publicPath()
    {
        return url('/surveys/'.$this->id.'-'. Str::slug($this->title));
    }

    public function user()
    {
        return $this->hasBelongsToany(User::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function surveys()
    {
        return $this->hasMany(Survey::class);
    }
}
