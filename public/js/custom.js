// Get All Order 
function getOrderLists() {
    alert(1)
    var url = '{{ url('get_order_info') }}';
    $.ajax({
        url: url,
        method: "GET",
        success: function (data) {
            showOrderLists(data);
        }
    });
}
getOrderLists();
setInterval(getOrderLists, 10000);

// Search Input
$('#search').on('input', function () {
    search();
});

function search() {
    var keyword = $('#search').val();
    var url = '{{ url('get_order_info') }}';
    $.ajax({
        url: url,
        method: "GET",
        data: {
            keyword: keyword,
        },
        success: function (data) {
            showOrderLists(data);
        }
    });
}

// Show Order Lists 
function showOrderLists(res) {
    let order_info = '';

    for (let i = 0; i < res.order_infos.length; i++) {
        order_info += '<div class="col-xl-4 col-12 show_invoice" data-id="' + res.order_infos[i].id + '">';
        order_info += '<div class="small-box bg-primary">';

        // Order Table Info 
        order_info += '<div class="inner">';
        order_info += '<h6 style="font-size: 23px;">';
        order_info += '<span style="color: white;">';
        order_info += res.order_infos[i].table_lists_table.table_name;
        order_info += '</span>';
        order_info += '</h6>';

        order_info += '<span style="color: white;">';
        order_info += 'ID: ';
        order_info += res.order_infos[i].order_no;
        order_info += '</span>';

        order_info += '</div>';

        // Icon 
        order_info += '<div class="icon">';
        order_info += '<span class="icon-Add-user text-white">';
        order_info += '<span class="path1"></span>';
        order_info += '<span class="path2"></span>';
        order_info += '</span>';
        order_info += '</div>';

        // Name & Time 
        order_info += '<div class="small-box-footer">';
        order_info += '<span class="pull-left">';
        order_info += res.order_infos[i].users_table.name;
        order_info += '</span>';
        order_info += '<span>'
        order_info += res.order_infos[i].check_in_time;
        order_info += '</span>';
        order_info += '</div>';

        order_info += '</div>';
        order_info += '</div>';
    }

    if (res.order_infos.length <= 0) {
        order_info += '<h1 style="color: red; padding: 20px;">';
        order_info += 'No data found.';
        order_info += '</h1>';
    }

    $('#orderInfos').html(order_info);
}

// Show Invoice
$(document).on("click", ".show_invoice", function () {
    var id = $(this).data('id');
    var url = '{{ url('show_order_info') }}';
    $.ajax({
        url: url + '/' + id,
        method: "GET",
        success: function (data) {
            $('.viewInvoiceRender').html(data.html);
            audioPlay();
        }
    });
});

// Submit Payment 
function submitPayment(order_info_id, amount) {
    if (order_info_id == null || order_info_id == "") {
        pricressFailed();
        return false;
    }

    if (amount == null || amount == "") {
        pricressFailed();
        return false;
    }

    var url = '{{ url('store_bill_info') }}';
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        method: 'POST',
        url: url,
        data: {
            order_info_id: order_info_id,
            amount: amount,
        },
        success: function (data) {
            paymentSuccess();
            getOrderLists();
            $('.viewInvoiceRender').html('');
        },
        error: function (data) { }
    });
}

// Print Invoice 
function printInvoice() {
    printJS({
        printable: "printArea",
        type: "html",
        css: [
            "{{ asset('assets/css/bill.css') }}"
        ],
        scanStyles: false
    });
}