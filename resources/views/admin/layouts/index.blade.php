@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="container-fluid">

    <div class="row g-4">

        <div class="col-md-4">
            <div class="card shadow border-0">
                <div class="card-body">

                    <h5 class="card-title">
                        <i class="fa-solid fa-chalkboard-user"></i>
                        Teachers
                    </h5>

                    <h2>{{ $teacherCount }}</h2>

                    <p class="text-muted">
                        Total Teachers
                    </p>

                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="card shadow border-0">
                <div class="card-body">

                    <h5 class="card-title">
                        <i class="fa-solid fa-images"></i>
                        Sliders
                    </h5>

                    <h2>{{ $sliderCount }}</h2>

                    <p class="text-muted">
                        Total Sliders
                    </p>

                </div>
            </div>
        </div>

    </div>

</div>

@endsection