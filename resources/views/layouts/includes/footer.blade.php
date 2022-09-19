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


<!-- Riday Admin App -->
<script src="js/template.js"></script>
<script src="js/pages/order.js"></script>
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>

@yield('script')

<script>
    $(document).ready(function() {
        $('.mydatatable').dataTable({
            "ordering": false
        });
    });
</script>
</body>

</html>
