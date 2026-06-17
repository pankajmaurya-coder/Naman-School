<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class class_subject_teacher extends Model
{
    protected $fillable = [
        'teacher_id',
        'class_id',
        'section_id',
        'subject_id'
    ];

   public function teacher()
    {
        return $this->belongsTo(Teacher::class,'teacher_id');
    }

    public function schoolClass()
    {
        return $this->belongsTo(SchoolClass::class,'class_id');
    }

    public function section()
    {
        return $this->belongsTo(Section::class,'section_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class,'subject_id');
    }
}
