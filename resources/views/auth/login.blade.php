<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
</head>
<body>

<form action="{{route('login.process') }}" method="POST">

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

    <div class="login-container">

        <div class="login-card">

            <h2>Welcome Back</h2>
            <p class="subtitle">
                Login to continue
            </p>

            <div class="form-group">
                <label>Email Address</label>
                <input
                    type="email"
                    name="email"
                    placeholder="Enter your email">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input
                    type="password"
                    name="password"
                    placeholder="Enter password">
            </div>

            <button type="submit">
                Login
            </button>

            <div class="signup-link">
                Don't have an account?
                <a href="/signup">Create Account</a>
            </div>

        </div>

    </div>

</form>

</body>
</html>