<header class="main-header" style="background-color: white;">
    <nav class="navbar navbar-static-top" style="margin-left: 2rem !important; margin-right: 2rem !important">
        <!-- Sidebar toggle button-->
        <div class="app-menu">
            <ul class="header-megamenu nav">

                <li class="btn-group">
                    <div class="app-menu">
                        <div class="search-bx mx-5">
                            <a href="{{ route('home') }}" class="btn btn-primary"
                                style="background-color: #277CCF; color: white;">
                                <i class="fa fa-home"></i>
                                Home
                            </a>
                        </div>
                    </div>
                </li>

                <li class="btn-group">
                    <div class="app-menu">
                        <div class="search-bx mx-5">
                            <a href="{{ route('kitchen_dashboard.index') }}" class="btn btn-primary"
                                style="background-color: #074d94; color: white;">
                                <i class="fa-solid fa-chart-simple"></i>
                                Dashboard
                            </a>
                        </div>
                    </div>
                </li>

                <li class="btn-group">
                    <div class="app-menu">
                        <div class="search-bx mx-5">
                            <a href="{{ route('order_preparation.index') }}" class="btn btn-primary"
                                style="background-color: #277CCF; color: white;">
                                <i class="fa fa-bowl-rice"></i>
                                Preparation
                            </a>
                        </div>
                    </div>
                </li>

                <li class="btn-group">
                    <div class="app-menu">
                        <div class="search-bx mx-5">
                            <a href="{{ route('order_done.index') }}" class="btn btn-primary"
                                style="background-color: #53A107; color: white;">
                                <i class="fa fa-check-double"></i>
                                Completed (Today)
                            </a>
                        </div>
                    </div>
                </li>

                <li class="btn-group">
                    <div class="app-menu">
                        <div class="search-bx mx-5">
                            <a href="{{ route('all_order_done.index') }}" class="btn btn-info"
                                style="background-color: #1b3204; color: white;">
                                <i class="fa fa-calendar"></i>
                                Completed (All)
                            </a>
                        </div>
                    </div>
                </li>

            </ul>
        </div>

        <div class="navbar-custom-menu r-side">
            <ul class="nav navbar-nav">

                <!-- Notifications -->
                <li class="dropdown notifications-menu">
                    <span class="label label-primary" id="orderTotalPreparation">0</span>
                    <a href="#" class="waves-effect waves-light dropdown-toggle btn-primary-light"
                        data-bs-toggle="dropdown" title="Notifications">
                        <i class="icon-Notifications"><span class="path1"></span><span class="path2"></span></i>
                    </a>
                </li>


                <!-- User Account-->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle p-0 text-dark hover-primary ms-md-30 ms-10"
                        data-bs-toggle="dropdown" title="User">
                        <span class="ps-30 d-md-inline-block d-none">
                            Hello,
                        </span>
                        <strong class="d-md-inline-block d-none">
                            {{ auth()->user()->name ?? '' }}
                        </strong>
                        <img src="{{ asset('data/user_icon.png') }}"
                            class="user-image rounded-circle avatar bg-white mx-10" alt="User Image">
                    </a>
                    <ul class="dropdown-menu animated flipInX">
                        <li class="user-body">
                            <a class="dropdown-item" href="#">
                                <i class="ti-user text-muted me-2"></i>
                                Profile
                            </a>
                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                <i class="ti-lock text-muted me-2"></i>
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
</header>
