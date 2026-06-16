<?php

namespace App\Http\Controllers;
use App\Models\role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
   public function index(){
    $roles = role::all();
    return view('auth.signup', compact('roles'));
   }
}
