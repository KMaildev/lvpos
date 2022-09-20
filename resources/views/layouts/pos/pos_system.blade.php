<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>POS System</title>

    <!-- Start Global Mandatory Style -->
    <!-- jquery-ui css -->
    <link href="https://restaurant.bdtask.com/demo-classic/assets/css/jquery-ui.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Bootstrap -->
    <link href="https://restaurant.bdtask.com/demo-classic/assets/css/bootstrap.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Bootstrap tag input-->
    <link href="https://restaurant.bdtask.com/demo-classic/assets/css/bootstrap-tagsinput.css" rel="stylesheet"
        type="text/css" />
    <!-- Bootstrap rtl -->

    <!-- Lobipanel css -->
    <link href="https://restaurant.bdtask.com/demo-classic/assets/css/lobipanel.min.css" rel="stylesheet"
        type="text/css" />
    <!-- Pace css -->
    <link href="https://restaurant.bdtask.com/demo-classic/assets/css/flash.css" rel="stylesheet" type="text/css" />

    <link href="https://restaurant.bdtask.com/demo-classic/assets/css/all.css" rel="stylesheet" type="text/css" />
    <link href="https://restaurant.bdtask.com/demo-classic/assets/css/fontawesome-iconpicker.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


    <!-- Pe-icon -->
    <link href="https://restaurant.bdtask.com/demo-classic/assets/css/pe-icon-7-stroke.css" rel="stylesheet"
        type="text/css" />
    <!-- Themify icons -->
    <link href="https://restaurant.bdtask.com/demo-classic/assets/css/themify-icons.css" rel="stylesheet"
        type="text/css" />
    <!-- select2.min -->
    <link href="https://restaurant.bdtask.com/demo-classic/assets/css/select2.min.css" rel="stylesheet"
        type="text/css" />
    <!-- timepicker -->
    <link href="https://restaurant.bdtask.com/demo-classic/assets/css/jquery-ui-timepicker-addon.min.css"
        rel="stylesheet" type="text/css" />
    <!-- datatable -->
    <link href="https://restaurant.bdtask.com/demo-classic/assets/datatables/css/dataTables.min.css" rel="stylesheet"
        type="text/css" />
    <link href="https://restaurant.bdtask.com/demo-classic/assets/sweetalert/sweetalert.css" rel="stylesheet"
        type="text/css" />
    <link href="https://restaurant.bdtask.com/demo-classic/assets/toastr/toastr.css" rel="stylesheet" type="text/css" />
    <link href="https://restaurant.bdtask.com/demo-classic/assets/css/kitchen.css" rel="stylesheet" type="text/css" />
    <link href="https://restaurant.bdtask.com/demo-classic/assets/css/print.css" rel="stylesheet" type="text/css" />
    <link href="https://restaurant.bdtask.com/demo-classic/assets/css/extra.css" rel="stylesheet" type="text/css" />
    <!-- End Global Mandatory Style

<!- Theme style -->
    <link href="https://restaurant.bdtask.com/demo-classic/assets/css/custom.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Theme style rtl -->

    <!-- Include module style -->
    <link href=https://restaurant.bdtask.com/demo-classic/application/modules/accounts/assets/css/style.css
        rel="stylesheet">
    <link href=https://restaurant.bdtask.com/demo-classic/application/modules/addon/assets/css/style.css
        rel="stylesheet">
    <link href=https://restaurant.bdtask.com/demo-classic/application/modules/hrm/assets/css/style.css rel="stylesheet">
    <link href=https://restaurant.bdtask.com/demo-classic/application/modules/itemmanage/assets/css/style.css
        rel="stylesheet">
    <link href=https://restaurant.bdtask.com/demo-classic/application/modules/ordermanage/assets/css/style.css
        rel="stylesheet">
    <link href=https://restaurant.bdtask.com/demo-classic/application/modules/production/assets/css/style.css
        rel="stylesheet">
    <link href=https://restaurant.bdtask.com/demo-classic/application/modules/purchase/assets/css/style.css
        rel="stylesheet">
    <link href=https://restaurant.bdtask.com/demo-classic/application/modules/report/assets/css/style.css
        rel="stylesheet">
    <link href=https://restaurant.bdtask.com/demo-classic/application/modules/reservation/assets/css/style.css
        rel="stylesheet">
    <link href=https://restaurant.bdtask.com/demo-classic/application/modules/setting/assets/css/style.css
        rel="stylesheet">
    <!-- jQuery -->
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
    <!-- Site wrapper -->
    <div class="wrapper">
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-green">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please Wait......</p>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                setTimeout(function() {
                    $('.page-loader-wrapper').fadeOut();
                }, 2000);
            });
        </script>
        <header class="main-header"></header>
        <!-- Left side column. contains the sidebar -->

        <div class="content-wrapper ml-0">
            <!-- Main content -->
            <div class="content">
                <!-- load messages -->
                <!-- load custom page -->
                <link rel="stylesheet" type="text/css"
                    href="https://restaurant.bdtask.com/demo-classic/application/modules/ordermanage/assets/css/posordernew.css">
                <script src="https://restaurant.bdtask.com/demo-classic/application/modules/ordermanage/assets/js/postop.js"
                    type="text/javascript"></script>


                {{-- Body --}}
                @yield('content')



                <script src="https://restaurant.bdtask.com/demo-classic/ordermanage/order/possettingjs" type="text/javascript"></script>
                <script src="https://restaurant.bdtask.com/demo-classic/ordermanage/order/quickorderjs" type="text/javascript"></script>
                <script src="https://restaurant.bdtask.com/demo-classic/application/modules/ordermanage/assets/js/possetting.js"
                    type="text/javascript"></script>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->
    <!-- Start Core Plugins-->
    <!-- jquery-ui -->
    <script src="https://restaurant.bdtask.com/demo-classic/ordermanage/order/showljslang" type="text/javascript"></script>
    <script src="https://restaurant.bdtask.com/demo-classic/ordermanage/order/basicjs" type="text/javascript"></script>
    <script src="https://restaurant.bdtask.com/demo-classic/assets/js/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Bootstrap -->
    <script src="https://restaurant.bdtask.com/demo-classic/assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Bootstrap tag input-->
    <script src="https://restaurant.bdtask.com/demo-classic/assets/js/bootstrap-tagsinput.js" type="text/javascript">
    </script>
    <!-- lobipanel -->
    <script src="https://restaurant.bdtask.com/demo-classic/assets/js/lobipanel.min.js" type="text/javascript"></script>
    <!-- Pace js -->
    <script src="https://restaurant.bdtask.com/demo-classic/assets/js/pace.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="https://restaurant.bdtask.com/demo-classic/assets/js/jquery.slimscroll.min.js" type="text/javascript">
    </script>
    <!-- FastClick -->
    <script src="https://restaurant.bdtask.com/demo-classic/assets/js/fastclick.min.js" type="text/javascript"></script>
    <!-- Select2 -->
    <script src="https://restaurant.bdtask.com/demo-classic/assets/js/select2.min.js" type="text/javascript"></script>
    <!-- bootstrap timepicker -->
    <script src="https://restaurant.bdtask.com/demo-classic/assets/js/jquery-ui-sliderAccess.js" type="text/javascript">
    </script>
    <script src="https://restaurant.bdtask.com/demo-classic/assets/js/jquery-ui-timepicker-addon.min.js"
        type="text/javascript"></script>
    <!-- tinymce js -->
    <script src="https://restaurant.bdtask.com/demo-classic/assets/tinymce/tinymce.min.js" type="text/javascript"></script>
    <!-- dataTables js -->
    <script src="https://restaurant.bdtask.com/demo-classic/assets/datatables/js/dataTables.min.js" type="text/javascript">
    </script>
    <script src="https://restaurant.bdtask.com/demo-classic/assets/datatables/js/buttons.colVis.min.js"
        type="text/javascript"></script>

    <!-- AdminBD frame -->
    <script src="https://restaurant.bdtask.com/demo-classic/assets/js/frame.js" type="text/javascript"></script>
    <script src="https://restaurant.bdtask.com/demo-classic/assets/js/jquery.confirm.js" type="text/javascript"></script>
    <script src="https://restaurant.bdtask.com/demo-classic/assets/js/fontawesome-iconpicker.js" type="text/javascript">
    </script>
    <script src="https://restaurant.bdtask.com/demo-classic/assets/sweetalert/sweetalert.min.js" type="text/javascript">
    </script>
    <script src="https://restaurant.bdtask.com/demo-classic/assets/toastr/toastr.min.js" type="text/javascript"></script>
    <script src="https://restaurant.bdtask.com/demo-classic/assets/js/pusher.min.js" type="text/javascript"></script>
    <script src="https://restaurant.bdtask.com/demo-classic/assets/mousetrap-master/mousetrap.min.js"
        type="text/javascript"></script>
    <script src="https://restaurant.bdtask.com/demo-classic/assets/js/print.js" type="text/javascript"></script>
    <script src="https://restaurant.bdtask.com/demo-classic/assets/js/masonry-package.js" type="text/javascript"></script>
    <script src="https://restaurant.bdtask.com/demo-classic/assets/js/images.loaded.js" type="text/javascript"></script>
    <!-- End Core Plugins -->

    <!-- Dashboard js -->
    <script src="https://restaurant.bdtask.com/demo-classic/assets/js/dashboard.js" type="text/javascript"></script>
    <script src="https://restaurant.bdtask.com/demo-classic/application/modules/template/assets/js/template.js"
        type="text/javascript"></script>

    <!-- Include module Script -->
    <script src=https://restaurant.bdtask.com/demo-classic/application/modules/accounts/assets/js/script.js?v=1.4
        type="text/javascript"></script>
    <script src=https://restaurant.bdtask.com/demo-classic/application/modules/hrm/assets/js/script.js?v=1.4
        type="text/javascript"></script>
    <script src=https://restaurant.bdtask.com/demo-classic/application/modules/itemmanage/assets/js/script.js?v=1.4
        type="text/javascript"></script>
    <script src=https://restaurant.bdtask.com/demo-classic/application/modules/ordermanage/assets/js/script.js?v=1.4
        type="text/javascript"></script>
    <script src=https://restaurant.bdtask.com/demo-classic/application/modules/production/assets/js/script.js?v=1.4
        type="text/javascript"></script>
    <script src=https://restaurant.bdtask.com/demo-classic/application/modules/purchase/assets/js/script.js?v=1.4
        type="text/javascript"></script>
    <script src=https://restaurant.bdtask.com/demo-classic/application/modules/report/assets/js/script.js?v=1.4
        type="text/javascript"></script>
    <script src=https://restaurant.bdtask.com/demo-classic/application/modules/reservation/assets/js/script.js?v=1.4
        type="text/javascript"></script>
    <script src=https://restaurant.bdtask.com/demo-classic/application/modules/setting/assets/js/script.js?v=1.4
        type="text/javascript"></script>
    <script>
        var url = window.location;
        // for sidebar menu entirely but not cover treeview
        $('ul.sidebar-menu a').filter(function() {
            return this.href != url;
        }).parent().removeClass('active');

        // for sidebar menu entirely but not cover treeview
        $('ul.sidebar-menu a').filter(function() {
            return this.href == url;
        }).parent().addClass('active');

        // for treeview
        $('ul.treeview-menu a').filter(function() {
            return this.href == url;
        }).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');
    </script>
    <input name="segment1" id="segment1" type="hidden" value="ordermanage" />
    <input name="segment2" id="segment2" type="hidden" value="order" />
    <input name="segment3" id="segment3" type="hidden" value="pos_invoice" />
    <input name="segment4" id="segment4" type="hidden" value="" />
    <input name="segment5" id="segment5" type="hidden" value="" />
</body>

</html>
