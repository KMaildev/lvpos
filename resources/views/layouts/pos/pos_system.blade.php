<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>POS System</title>

    <!-- jquery-ui css -->
    <link href="{{ asset('pos/css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('pos/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="{{ asset('pos/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('pos/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('pos/css/production_style.css') }}" rel="stylesheet">
    <script src="{{ asset('pos/js/jquery-1.12.4.min.js') }}" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('pos/css/posordernew.css') }}">
    <script src="{{ asset('pos/js/postop.js') }}" type="text/javascript"></script>

    <style>
        .loading:after {
            content: ' .';
            animation: dots 1s steps(5, end) infinite;
        }

        @keyframes dots {

            20%,
            20% {
                color: rgba(0, 0, 0, 1);
                text-shadow:
                    .25em 0 0 rgba(0, 0, 0, 0),
                    .5em 0 0 rgba(0, 0, 0, 0);
            }

            40% {
                color: #F00;
                text-shadow:
                    .25em 0 0 rgba(0, 0, 0, 0),
                    .5em 0 0 rgba(0, 0, 0, 0);
            }

            60% {
                text-shadow:
                    .25em 0 0 #F00,
                    .5em 0 0 rgba(0, 0, 0, 0);
            }

            80%,
            100% {
                text-shadow:
                    .25em 0 0 #666,
                    .5em 0 0 #666;
            }
        }

        div.myscroll {
            background-color: lightblue;
            width: 100%;
            height: 600px;
            overflow: scroll;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini sidebar-collapse pace-done">
    <div class="wrapper">
        <header class="main-header"></header>
        <div class="content-wrapper ml-0">
            <div class="content">

                @yield('content')

            </div>
        </div>
    </div>
    <script src="{{ asset('pos/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('pos/js/bootstrap-tagsinput.js') }}" type="text/javascript"></script>
</body>

</html>
