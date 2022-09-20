@extends('layouts.menus.management')
@section('content')
    <div class="col-12">
        <div class="box py-5">
            <div class="box-header with-border">
                <h4 class="box-title">Floor</h4>
            </div>
            <form class="form-horizontal" action="{{ route('floor.store') }}" method="POST" autocomplete="off" id="create-form"
                role="form">
                @csrf
                <div class="box-body">
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 form-label">
                            Title
                        </label>
                        <div class="col-sm-10">
                            <input class="form-control @error('title') is-invalid @enderror" type="text" name="title"
                                value="{{ old('title') }}" />
                            @error('title')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right">
                        Save
                    </button>
                </div>
                <br><br>
            </form>
        </div>
    </div>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreFloor', '#create-form') !!}
@endsection
