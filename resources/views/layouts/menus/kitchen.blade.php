@include('layouts.includes.header')
@include('layouts.includes.kitchen_top')

<div class="content-wrapper" style="margin-left: 2rem !important; margin-right: 2rem !important">
    <div class="container-full">
        @include('layouts.includes.alert')
        @yield('content')
    </div>
</div>

@include('layouts.includes.footer')
