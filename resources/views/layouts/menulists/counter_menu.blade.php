<aside class="main-sidebar">
    <section class="sidebar position-relative">
        <div class="multinav">
            <div class="multinav-scroll" style="height: 100%;">
                <ul class="sidebar-menu" data-widget="tree">

                    <li class="{{ Request::is('counter_dashboard') ? 'active' : '' }}">
                        <a href="{{ route('counter_dashboard.index') }}">
                            <i class="fa fa-home"></i>
                            Dashboard
                        </a>
                    </li>


                    <li class="{{ Request::is('counter_order') ? 'active' : '' }}">
                        <a href="{{ route('counter_order.index') }}">
                            <i class="fa fa-list"></i>
                            Orders
                        </a>
                    </li>


                    <li class="{{ Request::is('completed_order') ? 'active' : '' }}">
                        <a href="{{ route('completed_order.index') }}">
                            <i class="fa fa-check"></i>
                            Complete order
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </section>
</aside>
