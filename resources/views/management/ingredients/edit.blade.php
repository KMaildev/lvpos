@extends('layouts.menus.management')
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <div class="card mb-4">
                <h5 class="card-header">
                    Ingredient / Create
                </h5>
                <div class="card-body">

                    <form class="form-horizontal" action="{{ route('ingredients.update', $ingredient->id) }}" method="POST"
                        autocomplete="off" id="create-form" role="form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Name
                            </label>
                            <div class="col-md-9">
                                <input class="form-control @error('name') is-invalid @enderror" type="text"
                                    name="name" value="{{ $ingredient->name ?? '' }}" />
                                @error('name')
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
                                    name="unit" value="{{ $ingredient->unit ?? '' }}" />
                                @error('unit')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Ingredient Photo
                            </label>
                            <div class="col-md-9">
                                <input class="form-control @error('photo') is-invalid @enderror" type="file"
                                    name="photo" />
                                @error('photo')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <div class="preview_img my-2">
                                    @if ($ingredient->photo)
                                        <img src="{{ Storage::url($ingredient->photo) }}" alt=""
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
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\UpdateIngredients', '#create-form') !!}
@endsection
