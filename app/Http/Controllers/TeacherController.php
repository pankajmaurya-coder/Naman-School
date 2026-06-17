<?php

namespace App\Http\Controllers;
use App\Models\teacher;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;

class TeacherController extends Controller
{

    public function create(){
        return view('modules.teachers.insert');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([


            'name'          => 'required|string|max:255',
            'email'         => 'required|email|unique:users,email',
            'password'      => 'required|min:4',
            'role_id'       => 'required|exists:roles,id',
            'photo'         => 'nullable|image',
            'bio'           => 'nullable',

            // Teacher Table
            'employee_id'   => 'required|unique:teachers,employee_id',
            'phone'         => 'required|digits_between:10,15',
            'gender'        => 'required',
            'qualification' => 'required',
            'joining_date'  => 'required|date',
        ]);

        // Upload Photo
        $photoPath = null;

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')
                                 ->store('teachers', 'public');
        }

        // Create User
        $user = User::create([
            'name'      => $validated['name'],
            'email'     => $validated['email'],
            'password'  => $validated['password'],
            'role_id'   => $validated['role_id'],
            'photo'     => $photoPath,
            'bio'       => $validated['bio'],
        ]);

        
        Teacher::create([
            'user_id'       => $user->id,
            'employee_id'   => $validated['employee_id'],
            'phone'         => $validated['phone'],
            'gender'        => $validated['gender'],
            'qualification' => $validated['qualification'],
            'joining_date'  => $validated['joining_date'],
        ]);

        return redirect()->back()
                ->with('success', 'Teacher Created Successfully');
    }


    public function index(){
        $teachers = teacher::all();
        return view('modules.teachers.list', compact('teachers'));
    }

    public function show($id){
      $teacher = teacher::finOrFail($id);
      return view('modules.teachers.show', compact('teacher'));
    }
   
    // public function edit(Request $request, int $id){
    //  return  DB::transaction(function() use($request,$id){

    //        $validated = $request->validate([


    //         'name'          => 'required|string|max:255',
    //         'email'         => 'required|email|unique:users,email'.$this->email,
    //         'password'      => 'required|min:4',
    //         'role_id'       => 'required|exists:roles,id',
    //         'photo'         => 'nullable|image',
    //         'bio'           => 'nullable',

    //         // Teacher Table
    //         'employee_id'   => 'required|unique:teachers,employee_id',
    //         'phone'         => 'required|digits_between:10,15',
    //         'gender'        => 'required',
    //         'qualification' => 'required',
    //         'joining_date'  => 'required|date',
    //     ]);


    //   });
    // }
}
