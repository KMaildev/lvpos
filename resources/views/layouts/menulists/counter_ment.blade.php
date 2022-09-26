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
                            Order (Processing)
                        </a>
                    </li>
               

                    <li class="{{ Request::is('order_lists') ? 'active' : '' }}" hidden>
                        <a href="{{ route('order_lists.index') }}">
                            <i class="fa fa-list"></i>
                            Complete order
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </section>
</aside>
