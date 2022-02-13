<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    public function lessons()
    {
        return $this->belongsToMany('Lesson');
    }
    public function students()
    {
        return $this->belongsToMany('Student');
    }
}
