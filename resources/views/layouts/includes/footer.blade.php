</div>
<!-- ./wrapper -->
<!-- Vendor JS -->
<script src="{{ asset('main/js/vendors.min.js') }}"></script>
<script src="{{ asset('main/js/pages/chat-popup.js') }}"></script>
<script src="{{ asset('assets/vendor_components/apexcharts-bundle/dist/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/icons/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('assets/vendor_components/OwlCarousel2/dist/owl.carousel.js') }}"></script>
<script src="{{ asset('main/js/template.js') }}"></script>
<script src="{{ asset('main/js/pages/dashboard.js') }}"></script>
<script src="{{ asset('assets/vendor_components/datatable/datatables.min.js') }}"></script>
<script src="{{ asset('assets/vendor_components/select2/dist/js/select2.full.js') }}"></script>
<script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>

<!-- Riday Admin App -->
<script src="js/template.js"></script>
<script src="js/pages/order.js"></script>
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>

@yield('script')

<script>
    $(document).ready(function() {
        // Datatable 
        $('.mydatatable').dataTable({
            "ordering": false
        });

        // Select2 
        $('.select2').select2();


        // Delete Alert 
        $('.del_confirm').click(function(event) {
            var form = $(this).closest("form");
            event.preventDefault();
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    });
</script>
</body>

</html>
