@include('layouts.includes.header')
@include('layouts.includes.top')
@include('layouts.includes.menu')

<div class="content-wrapper">
    <div class="container-full">
        @yield('content')
    </div>
</div>

@include('layouts.includes.footer')
