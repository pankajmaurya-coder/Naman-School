<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/auth/signup.css">
</head>
<body>
   <form action="{{ route('signup.process') }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf

    <div class="signup-container">

        <div class="signup-card">

            <h2>Create Account</h2>
            <p class="subtitle">Join our community today</p>

            <div class="form-group">
                <label>Full Name</label>
                <input
                    type="text"
                    name="name"
                    placeholder="Enter your name">
            </div>

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
                    placeholder="Create password">
            </div>

            <div class="form-group">
                <label>Profile Photo</label>
                <input
                    type="file"
                    name="photo">
            </div>

            <div class="form-group">
                <label>Bio</label>
                <textarea
                    name="bio"
                    rows="4"
                    placeholder="Tell us about yourself"></textarea>
            </div>

            <button type="submit">
                Sign Up
            </button>

        </div>

    </div>

</form>
</body>
</html>