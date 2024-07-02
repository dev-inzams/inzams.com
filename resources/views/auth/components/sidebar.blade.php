<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset('uploads/').'/'.auth()->user()->image}}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{__(auth()->user()->name)}}</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{route('dashboard')}}" class="mb-1 nav-item nav-link {{Route::currentRouteName() == 'dashboard' ? 'active' : ''}}"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{route('dashboard.projects')}}" class="mb-1 nav-item nav-link {{Route::currentRouteName() == 'dashboard.projects' ? 'active' : ''}}"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>


            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" style="cursor:pointer" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Logout</a>
            </form>
        </div>
    </nav>
</div>
<!-- Sidebar End -->
