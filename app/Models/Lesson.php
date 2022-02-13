<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = ['name_lesson'];
    public function teachers()
    {
        return $this->belongsToMany('Teacher');
    }
    public function students()
    {
        return $this->belongsToMany('Student');
    }
}
