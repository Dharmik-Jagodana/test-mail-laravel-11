<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        {{-- Dashboard --}}
        <li class="nav-item {{ Request::is('admin/dashboard*') ? 'active' : '' }}">
            <a class="nav-link " href="{{ route('admin.home') }}">
                <i class="fas fa-house"></i>
                <span>Dashboard</span>
            </a>
        </li>

        {{-- Users --}}
        <li class="nav-item {{ Request::is('admin/user*') ? 'active' : '' }}">
            <a class="nav-link " href="{{ route('user.index') }}">
                <i class="fas fa-users"></i>
                <span>Users</span>
            </a>
        </li>

        <li class="nav-item {{ Request::is('admin/test-mail*') ? 'active' : '' }}">
            <a class="nav-link " href="{{ route('test.mail') }}">
                <i class="fa-solid fa-envelope"></i>
                <span>Test Mail</span>
            </a>
        </li>

        <li class="nav-item {{ Request::is('admin/new-job*') ? 'active' : '' }}">
            <a class="nav-link " href="{{ route('new.job') }}">
                <i class="fa-solid fa-envelope"></i>
                <span>New Job</span>
            </a>
        </li>

    </ul>
</aside>