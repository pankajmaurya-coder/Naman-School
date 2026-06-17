<?php

namespace App\Models\school;

use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
  protected $fillable = [
    'name'
  ];

  public function section(){
    return $this->hasMany(Section::class);
  }


      public function assignments(){
      return $this->hasMany(class_subject_teacher::class, 'class_id');
    }
}
