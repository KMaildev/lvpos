@include('layouts.includes.header')
@include('layouts.includes.top')
@include('layouts.menulists.manager_ment')

<div class="content-wrapper">
    <div class="container-full">
        @include('layouts.includes.alert')
        @yield('content')
    </div>
</div>

@include('layouts.includes.footer')
