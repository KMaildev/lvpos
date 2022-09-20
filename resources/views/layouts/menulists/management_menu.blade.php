<aside class="main-sidebar">
    <section class="sidebar position-relative">
        <div class="multinav">
            <div class="multinav-scroll" style="height: 100%;">
                <ul class="sidebar-menu" data-widget="tree">

                    <li class="{{ Request::is('management_dashboard') ? 'active' : '' }}">
                        <a href="{{ route('management_dashboard.index') }}">
                            <i class="fa fa-home"></i>
                            Dashboard
                        </a>
                    </li>

                    <li class="{{ Request::is('main_category') ? 'active' : '' }}">
                        <a href="{{ route('main_category.index') }}">
                            <i class="fa-solid fa-bowl-rice"></i>
                            Main Category
                        </a>
                    </li>

                    <li class="{{ Request::is('category') ? 'active' : '' }}">
                        <a href="{{ route('category.index') }}">
                            <i class="fa-solid fa-person-military-to-person"></i>
                            Category
                        </a>
                    </li>

                    <li class="{{ Request::is('menu_list') ? 'active' : '' }}">
                        <a href="{{ route('menu_list.index') }}">
                            <i class="fa-solid fa-kitchen-set"></i>
                            Menu List
                        </a>
                    </li>

                    <li class="{{ Request::is('ingredients') ? 'active' : '' }}">
                        <a href="{{ route('ingredients.index') }}">
                            <i class="fa-solid fa-mug-hot"></i>
                            Ingredients
                        </a>
                    </li>


                    <li class="{{ Request::is('department') ? 'active' : '' }}">
                        <a href="{{ route('department.index') }}">
                            <i class="fa-solid fa-bars"></i>
                            Floor List
                        </a>
                    </li>


                    <li class="{{ Request::is('department') ? 'active' : '' }}">
                        <a href="{{ route('department.index') }}">
                            <i class="fa-solid fa-table-cells"></i>
                            Table list
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </section>
</aside>
