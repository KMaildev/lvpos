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

                    <li class="{{ Request::is('order_lists') ? 'active' : '' }}">
                        <a href="{{ route('order_lists.index') }}">
                            <i class="fa fa-list"></i>
                            Order list
                            {{-- Order (Processing) --}}
                        </a>
                    </li>


                    <li class="{{ Request::is('completed_order') ? 'active' : '' }}">
                        <a href="{{ route('completed_order.index') }}">
                            <i class="fa fa-check"></i>
                            Complete order
                        </a>
                    </li>


                    <li class="{{ Request::is('completed_order') ? 'active' : '' }}">
                        <a href="{{ route('completed_order.index') }}">
                            <i class="fa fa-table"></i>
                            Table Management
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </section>
</aside>
