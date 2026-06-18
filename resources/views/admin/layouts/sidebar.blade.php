<aside class="sidebar">
    <div class="sidebar-logo">
       
         <img src="{{ asset('storage/' . auth()->user()->photo) }}">
        <h2>School Admin</h2>
    </div>

    <ul class="sidebar-menu">
        <li><a href="{{ route('slider.dashboard') }}"><i class="fa-solid fa-gauge"></i> Dashboard</a></li>
        <li><a href="{{ route('slider.list') }}"><i class="fa-solid fa-images"></i> Sliders</a></li>
        <li><a href="#"><i class="fa-solid fa-user-graduate"></i> Students</a></li>
        <li><a href="{{route('teacher.index')}}"><i class="fa-solid fa-chalkboard-user"></i> Teachers</a></li>
        <li><a href="#"><i class="fa-solid fa-book"></i> Courses</a></li>
        <li><a href="#"><i class="fa-solid fa-newspaper"></i> News</a></li>
        <li><a href="#"><i class="fa-solid fa-gear"></i> Settings</a></li>
        <li><a href="#"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
    </ul>
</aside>