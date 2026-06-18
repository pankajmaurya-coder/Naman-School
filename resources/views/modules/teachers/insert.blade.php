@extends('admin.layouts.app')

@section('title','Create Teacher')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/modules/teacher/insert.css') }}">
@endpush

@section('content')

<div class="teacher-page">

    <div class="teacher-card">

        <div class="card-header">
            <h2>Create Teacher</h2>
            <p>Add a new teacher to your school management system.</p>
        </div>

        <form action="{{ route('teacher.store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            <div class="form-grid">

                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="name" placeholder="Enter teacher name">
                    
                </div>

                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" placeholder="Enter email">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter password">
                </div>

                <div class="form-group">
                    <label>Role</label>
                    <select name="role_id">
                        <option value="">Select Role</option>

                        @foreach($roles as $role)
                            <option value="{{ $role->id }}">
                                {{ $role->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Employee ID</label>
                    <input type="text" name="employee_id" placeholder="EMP001">
                </div>

                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" name="phone" placeholder="Enter phone number">
                </div>

                <div class="form-group">
                    <label>Gender</label>
                    <select name="gender">
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Qualification</label>
                    <input type="text" name="qualification" placeholder="MCA, B.Ed, M.Tech">
                </div>

                <div class="form-group">
                    <label>Joining Date</label>
                    <input type="date" name="joining_date">
                </div>

                <div class="form-group">
                    <label>Teacher Photo</label>
                    <input type="file" name="photo">
                </div>

                <div class="form-group full-width">
                    <label>Bio</label>
                    <textarea name="bio"
                              placeholder="Write teacher information here..."></textarea>
                </div>

            </div>

            <div class="form-actions">

                <button type="reset" class="btn btn-reset">
                    Reset
                </button>

                <button type="submit" class="btn btn-save">
                    Save Teacher
                </button>

            </div>

        </form>

        @if($errors->any()) 
   <div class="alert alert-danger">
     <ul>
         @foreach($errors->all() as $error)
         <li>{{ $error }}</li>
          @endforeach 
        </ul>

     </div> 
     @endif @if(session('error'))
      <div class="alert error"> {{ session('error') }} </div>
       @endif

    </div>

</div>

@endsection