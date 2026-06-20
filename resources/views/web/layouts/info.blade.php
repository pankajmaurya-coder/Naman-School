<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer">

    <link rel="stylesheet" href="{{ asset('css/admin/layouts/info.css') }}">
</head>

<body>
   <header>

    <!-- Top Header -->
    <div class="top-heading">
        <ul>
            <li>
                <i class="fa-regular fa-envelope"></i>
                info@college.edu
            </li>

            <li>
                <i class="fa-solid fa-phone"></i>
                +91 9876543210
            </li>

            <li>
                <a href="#">Student Portal</a>
            </li>

            <li>
                <a href="#">Faculty Login</a>
            </li>
        </ul>
    </div>

    <!-- Main Navbar -->
    <nav class="main-heading">

        <!-- Logo -->
        <div class="logo">
            <a href="#">
                <i class="fa-solid fa-graduation-cap"></i>
                <span>SGM Public School</span>
            </a>
        </div>

        <!-- Navigation -->
        <div class="header-nav">

            <ul>

                <li>
                    <a href="#">Home</a>
                </li>

                <!-- Course -->
                <li class="dropdown">

                    <a href="#">
                        Course
                        <i class="fa-solid fa-angle-down"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="#">BCA</a></li>
                        <li><a href="#">BBA</a></li>
                        <li><a href="#">MCA</a></li>
                        <li><a href="#">MBA</a></li>
                    </ul>

                </li>

                <!-- Admissions -->
                <li class="dropdown">

                    <a href="#">
                        Admissions
                        <i class="fa-solid fa-angle-down"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="#">Apply Online</a></li>
                        <li><a href="#">Admission Process</a></li>
                        <li><a href="#">Fee Structure</a></li>
                        <li><a href="#">Scholarship</a></li>
                    </ul>

                </li>

                <!-- Faculty -->
                <li class="dropdown">

                    <a href="#">
                        Faculty
                        <i class="fa-solid fa-angle-down"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="#">Teaching Staff</a></li>
                        <li><a href="#">Management</a></li>
                        <li><a href="#">Departments</a></li>
                    </ul>

                </li>

                <!-- Academics -->
                <li class="dropdown">

                    <a href="#">
                        Academics
                        <i class="fa-solid fa-angle-down"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="#">Curriculum</a></li>
                        <li><a href="#">Programs</a></li>
                        <li><a href="#">Research</a></li>
                    </ul>

                </li>

                <!-- Syllabus -->
                <li class="dropdown">

                    <a href="#">
                        Syllabus
                        <i class="fa-solid fa-angle-down"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="#">Primary</a></li>
                        <li><a href="#">Secondary</a></li>
                        <li><a href="#">Higher Secondary</a></li>
                    </ul>

                </li>

                <!-- Examination -->
                <li class="dropdown">

                    <a href="#">
                        Examination
                        <i class="fa-solid fa-angle-down"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="#">Exam Schedule</a></li>
                        <li><a href="#">Results</a></li>
                        <li><a href="#">Guidelines</a></li>
                    </ul>

                </li>

                <li>
                    <a href="#">Contact</a>
                </li>

            </ul>

        </div>

        <!-- Mobile Menu Button -->
        <button class="menu-btn">
            <i class="fa-solid fa-bars"></i>
        </button>

    </nav>

</header>
</body>

<script>

const menuBtn = document.querySelector(".menu-btn");
const sidebar = document.querySelector(".sidebar");
const closeBtn = document.querySelector(".close-btn");
const overlay = document.querySelector(".overlay");

menuBtn.addEventListener("click", function(){

    sidebar.classList.add("active");
    overlay.classList.add("active");

});

closeBtn.addEventListener("click", function(){

    sidebar.classList.remove("active");
    overlay.classList.remove("active");

});

overlay.addEventListener("click", function(){

    sidebar.classList.remove("active");
    overlay.classList.remove("active");

});

</script>
</html>