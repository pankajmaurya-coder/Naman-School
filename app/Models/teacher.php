<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    protected $fillable = [
      'user_id',
      'employee_id',
      'phone',
      'gender',
      'qualification',
      '	joining_date'
    ];
     
    public function user(){
    return $this->belongsTo(User::class, 'user_id');
}

    public function assignments(){
      return $this->hasMany(class_subject_teacher::class, 'teacher_id');
    }
}
