<div class="tabsection">
    <span class="display-none">english</span>
    <ul class="nav nav-tabs mb-2" role="tablist">
        <li>
            <a href="{{ route('home') }}" class="maindashboard">
                <i class="fa fa-home"></i>
            </a>
        </li>

        <li class="active">
            <a href="#home" role="tab" data-toggle="tab" title="New Order" id="fhome" autofocus
                class="home newtab" onclick="giveselecttab(this)">
                <i class="fa fa-plus smallview"></i>
                <span class="responsiveview">New Order</span>
            </a>
        </li>

        <li>
            <a href="#profile" role="tab" data-toggle="tab" class="ongord newtab" id="ongoingorder"
                onclick="giveselecttab(this)">
                <i class="fa fa-hourglass-start smallview"></i>
                <span class="responsiveview">On Going Order</span>
            </a>
        </li>
    </ul>

    <div class="tgbar">
        <div class="dropdown">
            <a class="dropdown-toggle lang_box" type="button" data-toggle="dropdown">
                ENG
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu lang_options">
                <li>
                    <a href="javascript:;" onclick="addlang(this)"
                        data-url="https://restaurant.bdtask.com/demo-classic/hungry/setlangue/english">
                        English
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>