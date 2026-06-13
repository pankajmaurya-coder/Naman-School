@extends('admin.layouts.app')

@section('title', 'slider update')


@push('styles')
 <link rel="stylesheet" href="{{ asset('css/admin/sliders/update.css') }}">
@endpush

@section('content')
    <form action="{{ route('slider.update', $slider->id) }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf
    @method('PUT')

    @if(session('success'))
        <div class="alert success">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert error">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="slider-form-container">
        <div class="slider-form-card">

            <h2>Update Slider</h2>

            <div class="form-group">
                <label>Slider Title</label>
                <input type="text"
                       name="title"
                       value="{{ old('title', $slider->title) }}"
                       required>
            </div>

            <div class="form-group">
                <label>Current Image</label><br>

                <img src="{{ asset('storage/' . $slider->image) }}"
                     width="150"
                     alt="Slider Image">

                <br><br>

                <label>Change Image</label>
                <input type="file" name="image">
            </div>

            <div class="form-group">
                <label>Display Order</label>
                <input type="number"
                       name="sort_order"
                       value="{{ old('sort_order', $slider->sort_order) }}">
            </div>

            <div class="form-group">
                <label>Status</label>

                <select name="status">
                    <option value="active"
                        {{ $slider->status == 'active' ? 'selected' : '' }}>
                        Active
                    </option>

                    <option value="inactive"
                        {{ $slider->status == 'inactive' ? 'selected' : '' }}>
                        Inactive
                    </option>
                </select>
            </div>

            <button type="submit" class="submit-btn">
                Update Slider
            </button>

        </div>
    </div>

</form>
@endsection