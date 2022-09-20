@extends('layouts.menus.management')
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <div class="card mb-4">
                <h5 class="card-header">
                    Table / Create
                </h5>
                <div class="card-body">

                    <form class="form-horizontal" action="{{ route('table_lists.store') }}" method="POST" autocomplete="off"
                        id="create-form" role="form" enctype="multipart/form-data">
                        @csrf

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
                                        <option value="{{ $floor->id ?? '' }}">
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
                                    name="table_name" value="{{ old('table_name') }}" />
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
                                    name="reservation" value="{{ old('reservation') }}" />
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
                                <input class="form-control @error('table_icon') is-invalid @enderror" type="file"
                                    name="table_icon" />
                                @error('table_icon')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
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
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreTableList', '#create-form') !!}
@endsection
