<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/admin/sliders/slider-form.css') }}"> </head>
</head>
<body>
    <form action="{{ route('slider.store') }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf

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

            <h2>Add New Slider</h2>

            <div class="form-group">
                <label>Slider Title</label>
                <input type="text" name="title" required>
            </div>

            <div class="form-group">
                <label>Slider Image</label>
                <input type="file" name="image" required>
            </div>

            <div class="form-group">
                <label>Display Order</label>
                <input type="number" name="sort_order" value="0">
            </div>

            <div class="form-group">
                <label>Status</label>
                <select name="status">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>

            <button type="submit" class="submit-btn">
                Save Slider
            </button>

        </div>
    </div>

</form>
</body>
</html>