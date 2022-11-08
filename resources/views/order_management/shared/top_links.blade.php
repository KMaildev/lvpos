<div class="tabsection">
    <span class="display-none">english</span>
    <ul class="nav nav-tabs mb-2" role="tablist">
        <li>
            <a href="{{ route('home') }}" class="maindashboard">
                <i class="fa fa-home"></i>
            </a>
        </li>

        <li class="active">
            <a href="#new_order" role="tab" data-toggle="tab" title="New Order" autofocus class="home newtab">
                <i class="fa fa-plus smallview"></i>
                <span class="responsiveview">New Order</span>
            </a>
        </li>

        <li>
            <a href="#ongoingorder" role="tab" data-toggle="tab" class="ongord newtab">
                <i class="fa fa-hourglass-start smallview"></i>
                <span class="responsiveview">On Going Order</span>
            </a>
        </li>
    </ul>

    <div class="tgbar">
        <div class="dropdown">
            <a class="dropdown-toggle lang_box" type="button" data-toggle="dropdown">
                {{ auth()->user()->name ?? 'POS' }}
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu lang_options">
                <li>
                    <a href="javascript:;" data-url="#">
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
