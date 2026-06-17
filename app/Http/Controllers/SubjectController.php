<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index(){
        $subject = Subject::all();
        return view('', compact(subject));
    }
}
