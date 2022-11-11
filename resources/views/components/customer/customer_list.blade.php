<div class="table-responsive rounded card-table">
    <table class="table border-no" id="example1">
        <thead class="table-light">
            <tr>
                <th style="width: 1%;">No</th>
                <th style="width: 10%;">Name</th>
                <th style="width: 10%;">Email</th>
                <th style="width: 10%;">Mobile</th>
                <th style="width: 10%;">Address</th>
                <th style="width: 10%;">Remark</th>
                <th style="width: 10%;">Join Date</th>
                <th style="width: 5%;">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $key => $customer)
                <tr class="hover-primary">
                    <td>
                        {{ $key + 1 }}
                    </td>

                    <td>
                        {{ $customer->customer_name ?? '' }}
                    </td>

                    <td>
                        {{ $customer->email ?? '' }}
                    </td>

                    <td>
                        {{ $customer->mobile ?? '' }}
                    </td>

                    <td>
                        {{ $customer->address ?? '' }}
                    </td>

                    <td>
                        {{ $customer->remark ?? '' }}
                    </td>

                    <td>
                        {{ $customer->created_at->diffForHumans() }}
                    </td>

                    <td>
                        <div class="list-icons d-inline-flex">
                            <div class="list-icons-item dropdown">
                                <a href="#" class="list-icons-item dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="fa fa-gear"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">

                                    <a href="{{ route('counter_customer_lists.show', $customer->id) }}"
                                        class="dropdown-item">
                                        <i class="fa fa-eye"></i>
                                        History
                                    </a>

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $customers->withQueryString()->links() }}
</div>
