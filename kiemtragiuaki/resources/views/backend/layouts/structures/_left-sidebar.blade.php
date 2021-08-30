<aside class="left-sidebar" data-sidebarbg="skin5">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">

                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark" href="{{ route('backend.canbo.list') }}">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Danh sách cán bộ</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark" href="{{ route('backend.khoa.list') }}">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Danh sách khoa</span>
                    </a>
                </li>



                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark" href="{{ backendRouter('logout') }}">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
