<style>
    .modal-fullscreen {
        width: 100% !important;
        margin: 0px !important;
    }

    .box {
        position: relative;
        margin-bottom: 1.5rem;
        width: 100%;
        background-color: #ffffff;
        border-radius: 10px;
        padding: 0px;
        -webkit-transition: .5s;
        transition: .5s;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-shadow: 1px 2px 4px 0 rgba(34, 41, 47, 0.1);
        box-shadow: 1px 2px 4px 0 rgba(34, 41, 47, 0.1);
    }

    .box-body {
        padding: 1.5rem;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        border-radius: 10px;
    }

    .box-body>*:last-child {
        margin-bottom: 0;
    }

    .align-items-start {
        align-items: flex-start !important;
    }

    .w-80 {
        width: 80px !important;
    }

    .d-flex {
        display: flex !important;
    }

    .my-0 {
        margin-top: 0px !important;
        margin-bottom: 0px !important;
    }

    .fs-12 {
        font-size: 0.8571428571rem !important;
    }

    .me-20 {
        margin-right: 20px !important;
    }
</style>
{{-- Table Lists  --}}
<div class="modal fade modal-warning" id="showTableLists" role="dialog" style="background-color: white">
    <div class="modal-dialog modal-fullscreen" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title">Table</h3>
            </div>
            <div class="modal-body" style="height: 700px;">
                <div class="container-fulid">
                    <div class="row">
                        @foreach ($table_lists as $table_list)
                            <div class="col-xxxl-3 col-lg-3 col-md-3 col-sm-12 col-12"
                                onclick="setTableId({{ $table_list->id }}, '{{ $table_list->table_name }}')">
                                <div class="box">
                                    <div class="box-body">
                                        <div class="d-flex align-items-start">
                                            <div>
                                                @if ($table_list->table_icon)
                                                    <img src="{{ Storage::url($table_list->table_icon) }}"
                                                        class="w-80 me-20"
                                                        style="width: 100%; height: auto; background-size: center; object-fit: cover;" />
                                                @else
                                                    <img src="{{ asset('data/noimage.png') }}" class="w-80 me-20"
                                                        style="width: 100%; height: auto; background-size: center; object-fit: cover;" />
                                                @endif
                                            </div>
                                            <div>
                                                <h2 class="my-0 fw-700">
                                                    {{ $table_list->table_name ?? '' }}
                                                </h2>
                                                <p class="text-fade mb-0">
                                                    {{ $table_list->floor_table->title ?? '' }}
                                                </p>
                                                <p class="text-fade mb-0">
                                                    No of {{ $table_list->reservation ?? '' }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
