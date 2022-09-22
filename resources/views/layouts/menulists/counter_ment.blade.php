<aside class="main-sidebar">
    <section class="sidebar position-relative">
        <div class="multinav">
            <div class="multinav-scroll" style="height: 100%;">
                <ul class="sidebar-menu" data-widget="tree">

                    <li class="{{ Request::is('counter_dashboard') ? 'active' : '' }}">
                        <a href="{{ route('counter_dashboard.index') }}">
                            <i class="fa fa-users"></i>
                            Dashboard
                        </a>
                    </li>

                    <li class="{{ Request::is('employee') ? 'active' : '' }}">
                        <a href="{{ route('employee.index') }}">
                            <i class="fa fa-users"></i>
                            Employee
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </section>
</aside>
