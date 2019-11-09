<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    use SoftDeletes;
    
    public function educationLevel() {
        return $this->belongsTo(EducationLevel::class);
    }

    public function school() {
        return $this->belongsTo(School::class);
    }
}
