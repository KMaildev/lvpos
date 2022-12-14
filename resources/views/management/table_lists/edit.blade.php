@extends('layouts.menus.management')
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <div class="card mb-4">
                <h5 class="card-header">
                    Table / Create
                </h5>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('table_lists.update', $table_list->id) }}" method="POST"
                        autocomplete="off" id="create-form" role="form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Floor
                            </label>
                            <div class="col-md-9">
                                <select name="floor_id" class="form-control select2">
                                    <option value="">
                                        --Please Select Floor--
                                    </option>
                                    @foreach ($floors as $floor)
                                        <option value="{{ $floor->id ?? '' }}"
                                            @if ($floor->id == $table_list->floor_id) selected @endif>
                                            {{ $floor->title ?? '' }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('floor_id')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Table Name / No
                            </label>
                            <div class="col-md-9">
                                <input class="form-control @error('table_name') is-invalid @enderror" type="text"
                                    name="table_name" value="{{ $table_list->table_name ?? '' }}" />
                                @error('table_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Reservation
                            </label>
                            <div class="col-md-9">
                                <input class="form-control @error('reservation') is-invalid @enderror" type="text"
                                    name="reservation" value="{{ $table_list->reservation ?? '' }}" />
                                @error('reservation')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Table Icon
                            </label>
                            <div class="col-md-9">
                                <div class="input-group mb-3">
                                    <input class="form-control @error('table_icon') is-invalid @enderror" type="text"
                                        name="table_icon" id="getIcon" />

                                    <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#tableIconModal">
                                        Show
                                    </button>
                                    @error('table_icon')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="preview_img my-2">
                                    @if ($table_list->table_icon)
                                        <img src="{{ Storage::url($table_list->table_icon) }}" alt=""
                                            style="width: 20%; height: auto; background-position: center; background-size: contain;">
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-info pull-right">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('management.table_icon.index')
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\UpdateTableList', '#create-form') !!}
    <script>
        function setTableIcon(icon_path) {
            document.getElementById("getIcon").value = icon_path;
            $('#tableIconModal').modal('hide');
        }
    </script>
@endsection
