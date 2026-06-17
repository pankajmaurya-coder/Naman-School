<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/modules/teacher/insert.css')}}">
</head>
<body>
    <div class="container py-5">

    <div class="row justify-content-center">
        <div class="col-lg-10">

            <div class="card border-0 shadow-lg">
                
                <div class="card-header bg-primary text-white py-3">
                    <h3 class="mb-0">Create Teacher</h3>
                </div>

                <div class="card-body p-4">

                    <form action="{{ route('teacher.store') }}"
                          method="POST"
                          enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            <!-- Name -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">
                                    Full Name
                                </label>
                                <input type="text"
                                       name="name"
                                       class="form-control"
                                       placeholder="Enter Teacher Name">
                            </div>

                            <!-- Email -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">
                                    Email
                                </label>
                                <input type="email"
                                       name="email"
                                       class="form-control"
                                       placeholder="Enter Email">
                            </div>

                            <!-- Password -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">
                                    Password
                                </label>
                                <input type="password"
                                       name="password"
                                       class="form-control"
                                       placeholder="Enter Password">
                            </div>

                            <!-- Role -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">
                                    Role
                                </label>

                                <select name="role_id" class="form-select">
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

                            <!-- Employee ID -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">
                                    Employee ID
                                </label>
                                <input type="text"
                                       name="employee_id"
                                       class="form-control"
                                       placeholder="EMP001">
                            </div>

                            <!-- Phone -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">
                                    Phone
                                </label>
                                <input type="text"
                                       name="phone"
                                       class="form-control"
                                       placeholder="Enter Phone Number">
                            </div>

                            <!-- Gender -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">
                                    Gender
                                </label>

                                <select name="gender" class="form-select">
                                    <option value="">
                                        Select Gender
                                    </option>
                                    <option value="Male">
                                        Male
                                    </option>
                                    <option value="Female">
                                        Female
                                    </option>
                                    <option value="Other">
                                        Other
                                    </option>
                                </select>
                            </div>

                            <!-- Qualification -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">
                                    Qualification
                                </label>
                                <input type="text"
                                       name="qualification"
                                       class="form-control"
                                       placeholder="MCA, B.Ed, M.Tech etc">
                            </div>

                            <!-- Joining Date -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">
                                    Joining Date
                                </label>
                                <input type="date"
                                       name="joining_date"
                                       class="form-control">
                            </div>

                            <!-- Photo -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">
                                    Teacher Photo
                                </label>
                                <input type="file"
                                       name="photo"
                                       class="form-control">
                            </div>

                            <!-- Bio -->
                            <div class="col-12 mb-4">
                                <label class="form-label fw-semibold">
                                    Bio
                                </label>

                                <textarea name="bio"
                                          rows="5"
                                          class="form-control"
                                          placeholder="Write Teacher Information"></textarea>
                            </div>

                        </div>

                        <div class="text-end">
                            <button type="reset"
                                    class="btn btn-secondary px-4">
                                Reset
                            </button>

                            <button type="submit"
                                    class="btn btn-primary px-4">
                                Save Teacher
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>
</body>
</html>