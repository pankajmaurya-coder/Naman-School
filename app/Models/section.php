<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class section extends Model
{
    protected $fillable = [
     'name'
    ];

    public function SchoolClass(){
        return $this->belongsTo(SchoolClass::class, 'class_id');
    }
}
