<?php

namespace App\Http\Controllers;
use App\Models\teacher;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
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

            'employee_id'   => 'required|unique:teachers,employee_id',
            'phone'         => 'required|digits_between:10,15',
            'gender'        => 'required',
            'qualification' => 'required',
            'joining_date'  => 'required|date',
        ]);

        $photoPath = null;

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')
                                 ->store('teachers', 'public');
        }

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

        return redirect()->route('teacher.index')
                ->with('success', 'Teacher Created Successfully');
    }


    public function index(){
        $teachers = teacher::with('user')->get();
        return view('modules.teachers.list', compact('teachers'));
    }

    public function show($id){
      $teacher = teacher::with('user')->findOrFail($id);
      return view('modules.teachers.show', compact('teacher'));
    }
   
     public function edit(int $id){
         $teacher = teacher::with('user')->findOrFail($id);
         return view('modules.teachers.update', compact('teacher'));
     }


    public function update(Request $request, int $id){
     return  DB::transaction(function() use($request,$id){

           $teacher = teacher::with('user')->findOrFail($id);
           $user = $teacher->user;

           $validated = $request->validate([

            'name'          => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,

            'role_id'       => 'required|exists:roles,id',
            'photo'         => 'nullable|image',
            'bio'           => 'nullable',
            'phone'         => 'required|digits_between:10,15',
            'gender'        => 'required',
            'qualification' => 'required',
            'joining_date'  => 'required|date',
        ]);

        $imagePath = $user->photo;

          if($request->hasFile('photo')){
            if($user->photo && storage::disk('public')->exists($user->photo)){
                storage::disk('public')->delete($user->photo);
            }
            $imagePath = $request->file('photo')
            ->store('teachers','public');

          }

          $user->update([
    'name'    => $validated['name'],
    'email'   => $validated['email'],
    'role_id' => $validated['role_id'],
    'photo'   => $imagePath,
    'bio'     => $validated['bio'],
     ]);

         
        $teacher->update([
            'phone'         => $validated['phone'],
            'qualification' => $validated['qualification'],
            'gender'        => $validated['gender'],
            'joining_date'  => $validated['joining_date'],
        ]);
        return redirect()->route('teacher.show',$teacher->id)->with("success", "data update succesfully");
      });
    }

    public function destroy(int $id){
        return DB::transaction(function () use($id) {
            $teacher = teacher::with('user')->findOrFail($id);
             $user = $teacher->user;
             if($user->photo && storage::disk('public')->exists($user->photo)){
                storage::disk('public')->delete($user->photo);
             }

            $teacher->delete($id);
            $user->delete();
        });
        return redirect()->route(teacher.index)->width("success", "data delete successfully");
    }
}
