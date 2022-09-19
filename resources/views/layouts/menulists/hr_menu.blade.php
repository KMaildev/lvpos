<aside class="main-sidebar">
    <section class="sidebar position-relative">
        <div class="multinav">
            <div class="multinav-scroll" style="height: 100%;">
                <ul class="sidebar-menu" data-widget="tree">

                    <li class="{{ Request::is('employee') ? 'active' : '' }}">
                        <a href="{{ route('employee.index') }}">
                            <i class="fa fa-users"></i>
                            Employee
                        </a>
                    </li>


                    <li class="{{ Request::is('department') ? 'active' : '' }}">
                        <a href="{{ route('department.index') }}">
                            <i class="fa fa-check"></i>
                            Department
                        </a>
                    </li>

                    <li class="{{ Request::is('role') ? 'active' : '' }}">
                        <a href="{{ route('role.index') }}">
                            <i class="fa fa-check-double"></i>
                            Role
                        </a>
                    </li>

                    <li class="{{ Request::is('permission') ? 'active' : '' }}">
                        <a href="{{ route('permission.index') }}">
                            <i class="fa fa-circle-info"></i>
                            Permission
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</aside>
