<div class="text-center">
    <div>
        <a class="avatar avatar-xxl status-success mb-3 bg-transparent" href="#">
            <img src="{{ asset('data/user_icon.png') }}" class="rounded-circle bg-primary-light" alt="...">
        </a>
    </div>
    <h5 class="mt-5">
        <a class="text-default hover-primary" href="#">
            {{ $customer->customer_name ?? 'No Data' }}
        </a>
    </h5>
    <p>
        <small class="fs-12">
            {{ $customer->created_at->diffForHumans() }}
        </small>
    </p>

    @if ($customer->remark)
        <p class="text-fade fs-12 mb-50">
            {{ $customer->remark ?? 'No Data' }}
        </p>
    @endif
</div>

<div class="box-footer no-padding">
    <ul class="nav d-block nav-stacked">

        <li class="nav-item">
            <a href="#" class="nav-link">
                Name
                <span class="pull-right badge bg-info-light">
                    {{ $customer->customer_name ?? 'No Data' }}
                </span>
            </a>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
                Email
                <span class="pull-right badge bg-info-light">
                    {{ $customer->email ?? 'No Data' }}
                </span>
            </a>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
                Phone
                <span class="pull-right badge bg-info-light">
                    {{ $customer->mobile ?? 'No Data' }}
                </span>
            </a>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
                Address
                <span class="pull-right badge bg-info-light">
                    {{ $customer->address ?? 'No Data' }}
                </span>
            </a>
        </li>

    </ul>
</div>
