<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>

    <link rel="stylesheet" href="{{ asset('css/auth/signup.css') }}">
</head>
<body>

<div class="container">

    <div class="form-card">

        <div class="header">
            <h1>Create User</h1>
            <p>Add a new user to the school management system</p>
        </div>

        <form action="{{ route('signup.process') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            @if(session('success'))
    <div class="alert success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert error">
        {{ session('error') }}
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


            <div class="grid">

                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text"
                           name="name"
                           placeholder="Enter full name">
                </div>

                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email"
                           name="email"
                           placeholder="Enter email address">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password"
                           name="password"
                           placeholder="Enter password">
                </div>

                <div class="form-group">
                    <label>User Role</label>
                    <select name="role_id">

                        <option value="">
                            Select Role
                        </option>

                        @foreach($roles as $role)
                            <option value="{{ $role->id }}">
                                {{ $role->name }}
                            </option>
                        @endforeach

                    </select>
                </div>

                <div class="form-group">
                    <label>Status</label>

                    <select name="status">
                        <option value="active">
                            Active
                        </option>

                        <option value="inactive">
                            Inactive
                        </option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Profile Photo</label>
                    <input type="file" name="photo">
                </div>

            </div>

            <div class="form-group">
                <label>User Bio</label>

                <textarea
                    name="bio"
                    rows="5"
                    placeholder="Write something about the user"></textarea>
            </div>

            <button type="submit" class="btn">
                Create User
            </button>

        </form>

    </div>

</div>

</body>
</html>