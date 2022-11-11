<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@section('script')
    <script type="text/javascript">
        var customer_labels = {{ Js::from($customer_labels) }};
        var customer_data = {{ Js::from($customer_data) }};

        const data = {
            labels: customer_labels,
            datasets: [{
                label: 'Customer',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: customer_data,
            }]
        };

        const config = {
            type: 'line',
            data: data,
            options: {}
        };

        const customerChartData = new Chart(
            document.getElementById('customerChart'),
            config
        );




        // incomeChart
        var order_items_labels = {{ Js::from($order_items_labels) }};
        var order_items_data = {{ Js::from($order_items_data) }};

        const income_data = {
            labels: order_items_labels,
            datasets: [{
                label: 'Income',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: order_items_data,
            }]
        };

        const income_config = {
            type: 'bar',
            data: income_data,
            options: {}
        };

        const incomeChartData = new Chart(
            document.getElementById('incomeChart'),
            income_config
        );
    </script>
@endsection