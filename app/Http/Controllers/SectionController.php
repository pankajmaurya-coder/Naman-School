<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index(){
        $section = section::all();
        return view('', compact('section'));
    }
}
