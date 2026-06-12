<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/admin/dashboard.css') }}">
</head>
<body>

<!-- Sidebar Start -->

<div class="sidebar">

    <div class="logo">
        <h2>ADMIN</h2>
        <p>Welcome Sir 👋</p>
    </div>

    <ul>

        <li class="active">
            <i class="bi bi-speedometer2"></i>
            Dashboard
        </li>

        <li class="title">
            Website Management
        </li>

        <li class="sub-menu">
    <a href="{{ route('slider.list') }}">
        <i class="bi bi-images"></i>
        Slider
    </a>
</li>

        <li class="sub-menu">
            <i class="bi bi-file-earmark"></i>
            About Us
        </li>

        <li class="sub-menu">
            <i class="bi bi-image"></i>
            Gallery
        </li>

        <li>
            <i class="bi bi-people"></i>
            Staff Management
        </li>

        <li>
            <i class="bi bi-person"></i>
            User Management
        </li>

        <li>
            <i class="bi bi-chat-left-text"></i>
            Messages
        </li>

        <li>
            <i class="bi bi-gear"></i>
            Settings
        </li>

        <li>
            <i class="bi bi-box-arrow-right"></i>
            Logout
        </li>

    </ul>

</div>

<!-- Sidebar End -->

<!-- Main Start -->

<div class="main">

    <div class="topbar">

        <button id="menu-btn">
            <i class="bi bi-list"></i>
        </button>

        <h3>Dashboard</h3>

        <div class="profile">

            <img src="https://i.pravatar.cc/50" alt="">

            <span>Sir</span>

        </div>

    </div>

    <div class="container-fluid">

        <div class="row mt-4">

            <div class="col-lg-3">

                <div class="card dashboard-card">

                    <h5>Total Users</h5>

                    <h1>1200</h1>

                </div>

            </div>

            <div class="col-lg-3">

                <div class="card dashboard-card">

                    <h5>Total Staff</h5>

                    <h1>35</h1>

                </div>

            </div>

            <div class="col-lg-3">

                <div class="card dashboard-card">

                    <h5>Total Slider</h5>

                    <h1>8</h1>

                </div>

            </div>

            <div class="col-lg-3">

                <div class="card dashboard-card">

                    <h5>Messages</h5>

                    <h1>20</h1>

                </div>

            </div>

        </div>

        <div class="row mt-4">

            <div class="col-lg-6">

                <div class="card p-4">

                    <h4>Recent Activity</h4>

                    <hr>

                    <p>✔ New User Registered</p>

                    <p>✔ Slider Updated</p>

                    <p>✔ Staff Added</p>

                    <p>✔ Website Updated</p>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="card p-4">

                    <h4>Database Data</h4>

                    <hr>

                    <table class="table">

                        <thead>

                        <tr>
                            <th>Name</th>
                            <th>Status</th>
                        </tr>

                        </thead>

                        <tbody id="table-data">

                        

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

</div>

<script src="/js/admin/dashboard.js"></script>
</body>
</html>