<!-- BEGIN: Header-->
<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-dark navbar-shadow container-xxl">
    <div class="navbar-container d-flex content">
        <ul class="nav navbar-nav align-items-center ms-auto">
            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none">
                        <span class="user-name fw-bolder">{{ Auth::guard('admin')->user()->name }}</span>
                            <span class="user-status">Admin</span></div><span class="avatar">
                            </span>
                        </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                    <a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{ url('logout') }}">
                        <i class="me-50" data-feather="power"></i> Logout
                        <form id="logout-form" action="{{ url('logout') }}" method="GET" class="d-none">
                            @csrf
                        </form>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!-- END: Header-->
