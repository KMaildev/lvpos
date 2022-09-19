@extends('layouts.menus.management')
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <div class="card mb-4">
                <h5 class="card-header">
                    Category / Create
                </h5>
                <div class="card-body">

                    <form class="form-horizontal" action="{{ route('category.store') }}" method="POST" autocomplete="off"
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
                                Unit
                            </label>
                            <div class="col-md-9">
                                <input class="form-control @error('unit') is-invalid @enderror" type="text"
                                    name="unit" value="{{ old('unit') }}" />
                                @error('unit')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Main Category
                            </label>
                            <div class="col-md-9">
                                <select name="main_categorie_id" class="form-control">
                                    <option value="">
                                        --Please Select Main Category--
                                    </option>
                                    @foreach ($main_categoryies as $main_categoryie)
                                        <option value="{{ $main_categoryie->id ?? 0 }}">
                                            {{ $main_categoryie->title ?? '' }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('main_categorie_id')
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
    {!! JsValidator::formRequest('App\Http\Requests\StoreCategory', '#create-form') !!}
@endsection
