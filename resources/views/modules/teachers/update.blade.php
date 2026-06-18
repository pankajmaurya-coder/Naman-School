@extends('admin.layouts.app')

@section('title','Update Teacher')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/modules/teacher/update.css') }}">
@endpush

@section('content')

<form action="{{ route('teacher.update', $teacher->id) }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <div class="page-wrapper">

        <div class="teacher-form-card">

            <div class="card-header">
                <h2>Update Teacher</h2>
            </div>

            <div class="form-grid">

                <!-- Left Side -->
                <div class="profile-section">

                    <div class="profile-image">
                        @if($teacher->user->photo)
                            <img src="{{ asset('storage/'.$teacher->user->photo) }}">
                        @else
                            <img src="{{ asset('images/default-user.png') }}">
                        @endif
                    </div>

                    <label class="upload-btn">
                        Change Photo
                        <input type="file" name="photo" hidden>
                    </label>

                </div>

                <!-- Right Side -->
                <div class="fields-section">

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text"
                               name="name"
                               value="{{ old('name',$teacher->user->name) }}">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email"
                               name="email"
                               value="{{ old('email',$teacher->user->email) }}">
                    </div>

                    <div class="form-group">
                        <label>Role</label>
                        <select name="role_id">
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}"
                                    {{ $teacher->user->role_id == $role->id ? 'selected' : '' }}>
                                    {{ $role->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Employee ID</label>
                        <input type="text"
                               name="employee_id"
                               value="{{ old('employee_id',$teacher->employee_id) }}">
                    </div>

                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text"
                               name="phone"
                               value="{{ old('phone',$teacher->phone) }}">
                    </div>

                    <div class="form-group">
                        <label>Gender</label>
                        <select name="gender">
                            <option value="Male" {{ $teacher->gender == 'Male' ? 'selected' : '' }}>
                                Male
                            </option>

                            <option value="Female" {{ $teacher->gender == 'Female' ? 'selected' : '' }}>
                                Female
                            </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Qualification</label>
                        <input type="text"
                               name="qualification"
                               value="{{ old('qualification',$teacher->qualification) }}">
                    </div>

                    <div class="form-group">
                        <label>Joining Date</label>
                        <input type="date"
                               name="joining_date"
                               value="{{ old('joining_date', \Carbon\Carbon::parse($teacher->joining_date)->format('Y-m-d')) }}">
                    </div>

                    <div class="form-group full-width">
                        <label>Bio</label>
                        <textarea name="bio">{{ old('bio',$teacher->user->bio) }}</textarea>
                    </div>

                </div>

            </div>

            <div class="action-buttons">

                <button type="submit" class="btn btn-primary">
                    Update Teacher
                </button>

                <a href="{{ route('teacher.show',$teacher->id) }}"
                   class="btn btn-secondary">
                    Back
                </a>

            </div>

        </div>

    </div>

</form>

@endsection