<form action="{{ route('submit_change_new_table') }}" method="post" id="create-new">
    @csrf
    <div class="modal fade" id="showTableChangeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Table Change
                    </h5>
                </div>
                <div class="modal-body" style="height: 700px;">
                    <div class="container-fulid">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label for="">Current Table:</label>
                                        <input type="text" class="form-control" id="CurrentTableId" readonly>
                                        <input type="hidden" class="form-control" id="CurrentOrderInfoId"
                                            name="order_info_id">
                                    </div>

                                    <div class="col-sm-4">
                                        <label for="">New Table:</label>
                                        <input type="text" class="form-control" id="NewTableName" readonly>
                                        <input type="hidden" class="form-control" id="NewTableId" name="table_list_id">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row py-3">
                            @foreach ($table_lists as $table_list)
                                @php
                                    $table_list_id = $table_list->order_infos_table_change_table->table_list_id ?? '';
                                @endphp
                                @if ($table_list_id == $table_list->id)
                                @else
                                    <div class="col-xxxl-3 col-lg-3 col-md-3 col-sm-12 col-12"
                                        onclick="setTableChange({{ $table_list->id }}, '{{ $table_list->table_name }}')">
                                        <div class="box">
                                            <div class="box-body">
                                                <div class="d-flex align-items-start">
                                                    <div>
                                                        @if ($table_list->table_icon)
                                                            <img src="{{ Storage::url($table_list->table_icon) }}"
                                                                class="w-80 me-20"
                                                                style="width: 100%; height: auto; background-size: center; object-fit: cover;" />
                                                        @else
                                                            <img src="{{ asset('data/noimage.png') }}"
                                                                class="w-80 me-20"
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
                                @endif
                            @endforeach
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
