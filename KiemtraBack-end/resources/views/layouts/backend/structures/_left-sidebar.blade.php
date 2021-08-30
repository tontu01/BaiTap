<aside class="left-sidebar" data-sidebarbg="skin5">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark" href="{{ backendRouter('dashboard') }}">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Trang chủ</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark" href="{{ backendRouter('projects.list') }}">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Dự án</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark" href="{{ backendRouter('news.list') }}">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Tin tức</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
