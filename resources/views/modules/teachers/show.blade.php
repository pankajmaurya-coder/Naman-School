@extends('admin.layouts.app')

@section('title','Teacher Details')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/modules/teacher/show.css') }}">
@endpush

@section('content')

@if(session('success'))
    <div class="alert success">
        {{ session('success') }}
    </div>
@endif

<div class="teacher-card">

    <div class="teacher-image">
        <img src="{{ asset('storage/' . $teacher->user->photo) }}"
             alt="{{ $teacher->user->name }}">
    </div>

    <div class="teacher-info">
        <h2>{{ $teacher->user->name }}</h2>

        <div class="info-row">
            <span>Email :</span>
            <p>{{ $teacher->user->email }}</p>
        </div>

        <div class="info-row">
            <span>Phone :</span>
            <p>{{ $teacher->phone ?? 'N/A' }}</p>
        </div>

        <div class="info-row">
            <span>Teacher ID :</span>
            <p>{{ $teacher->employee_id }}</p>
        </div>

         <div class="info-row">
            <span>About :</span>
            <p>{{ $teacher->user->bio }}</p>
        </div>
    </div>

    <div class="teacher-actions">
        <a href="{{ route('teacher.index') }}" class="btn btn-back">
            Back
        </a>

        <a href="{{ route('teacher.edit', $teacher->id) }}" class="btn btn-update">
            Update
        </a>
    </div>

</div>

@endsection