@extends('layouts.menus.management')
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <div class="card mb-4">
                <h5 class="card-header">
                    Main Category / Create
                </h5>
                <div class="card-body">

                    <form class="form-horizontal" action="{{ route('main_category.store') }}" method="POST" autocomplete="off"
                        id="create-form" role="form">
                        @csrf
                        <div class="form-group row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Title
                            </label>
                            <div class="col-md-9">
                                <input class="form-control @error('title') is-invalid @enderror" type="text"
                                    name="title" value="{{ old('title') }}" />
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Type
                            </label>
                            <div class="col-md-9">
                                <select name="type" class="form-control">
                                    <option value="food">
                                        Food
                                    </option>
                                    <option value="bar">
                                        Bar
                                    </option>
                                </select>
                                @error('type')
                                    <div class="invalid-feedback"> {{ $message }} </div>
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
    {!! JsValidator::formRequest('App\Http\Requests\StoreMainCategory', '#create-form') !!}
@endsection
