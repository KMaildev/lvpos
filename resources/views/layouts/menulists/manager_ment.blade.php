<aside class="main-sidebar">
    <section class="sidebar position-relative">
        <div class="multinav">
            <div class="multinav-scroll" style="height: 100%;">
                <ul class="sidebar-menu" data-widget="tree">

                    <li class="{{ Request::is('manager_dashboard') ? 'active' : '' }}">
                        <a href="{{ route('manager_dashboard.index') }}">
                            <i class="fa fa-home"></i>
                            Dashboard
                        </a>
                    </li>

                    <li class="{{ Request::is('manager_current_order') ? 'active' : '' }}">
                        <a href="{{ route('manager_current_order.index') }}">
                            <i class="fa fa-history"></i>
                            Current Order
                        </a>
                    </li>


                    <li class="{{ Request::is('order_lists') ? 'active' : '' }}">
                        <a href="{{ route('order_lists.index') }}">
                            <i class="fa fa-file"></i>
                            Invoice
                        </a>
                    </li>


                    <li class="{{ Request::is('table_management') ? 'active' : '' }}">
                        <a href="{{ route('table_management.index') }}">
                            <i class="fa fa-table"></i>
                            Table Change
                        </a>
                    </li>


    

                </ul>
            </div>
        </div>
    </section>
</aside>
