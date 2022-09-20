<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>POS System</title>

    <!-- jquery-ui css -->
    <link href="https://restaurant.bdtask.com/demo-classic/assets/css/jquery-ui.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Bootstrap -->
    <link href="https://restaurant.bdtask.com/demo-classic/assets/css/bootstrap.min.css" rel="stylesheet"
        type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link href="https://restaurant.bdtask.com/demo-classic/assets/css/custom.min.css" rel="stylesheet"
        type="text/css" />

    <link href=https://restaurant.bdtask.com/demo-classic/application/modules/ordermanage/assets/css/style.css
        rel="stylesheet">

    <link href=https://restaurant.bdtask.com/demo-classic/application/modules/production/assets/css/style.css
        rel="stylesheet">
    <script src="https://restaurant.bdtask.com/demo-classic/assets/js/jquery-1.12.4.min.js" type="text/javascript"></script>

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
    </style>
</head>

<body class="hold-transition sidebar-mini sidebar-collapse pace-done">
    <div class="wrapper">
        <header class="main-header"></header>
        <div class="content-wrapper ml-0">
            <div class="content">
                <link rel="stylesheet" type="text/css"
                    href="https://restaurant.bdtask.com/demo-classic/application/modules/ordermanage/assets/css/posordernew.css">
                <script src="https://restaurant.bdtask.com/demo-classic/application/modules/ordermanage/assets/js/postop.js"
                    type="text/javascript"></script>

                @yield('content')

            </div>
        </div>
    </div>
    <script src="https://restaurant.bdtask.com/demo-classic/assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://restaurant.bdtask.com/demo-classic/assets/js/bootstrap-tagsinput.js" type="text/javascript">
    </script>
</body>

</html>
