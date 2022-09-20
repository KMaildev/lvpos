@extends('layouts.menus.management')
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <div class="card mb-4">
                <h5 class="card-header">
                    Menu / Create
                </h5>
                <div class="card-body">

                    <form class="form-horizontal" action="{{ route('menu_list.update', $menu_list->id) }}" method="POST"
                        autocomplete="off" id="create-form" role="form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Category
                            </label>
                            <div class="col-md-9">
                                <select name="categorie_id" class="form-control select2">
                                    <option value="">
                                        --Please Select Category--
                                    </option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id ?? '' }}"
                                            @if ($category->id == $menu_list->categorie_id) selected @endif>
                                            {{ $category->title ?? '' }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('type')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Main Category
                            </label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" id="mainCategoriesName" readonly />
                                <input class="form-control" type="hidden" id="mainCategoriesId" readonly
                                    name="main_categorie_id" />
                                @error('main_categorie_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Menu Name
                            </label>
                            <div class="col-md-9">
                                <input class="form-control @error('name') is-invalid @enderror" type="text"
                                    name="name" value="{{ $menu_list->name ?? '' }}" />
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Price
                            </label>
                            <div class="col-md-9">
                                <input class="form-control @error('price') is-invalid @enderror" type="text"
                                    name="price" value="{{ $menu_list->price ?? '' }}" />
                                @error('price')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Menu Photo
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
                                    @if ($menu_list->photo)
                                        <img src="{{ Storage::url($menu_list->photo) }}" alt=""
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
    {!! JsValidator::formRequest('App\Http\Requests\UpdateMenuLists', '#create-form') !!}
    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="categorie_id"]').on('change', function() {
                var categorie_id = $(this).val();
                var url = '{{ url('get_category_with_main_category') }}';
                if (categorie_id) {
                    $.ajax({
                        url: url + '/' + categorie_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $("#mainCategoriesName").val(data.title);
                            $("#mainCategoriesId").val(data.id);
                        }
                    });
                }
            });


            function called_category_with_main_category() {
                var categorie_id = '{{ $menu_list->categorie_id }}'
                var url = '{{ url('get_category_with_main_category') }}';
                if (categorie_id) {
                    $.ajax({
                        url: url + '/' + categorie_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $("#mainCategoriesName").val(data.title);
                            $("#mainCategoriesId").val(data.id);
                        }
                    });
                }
            }
            called_category_with_main_category()
        });
    </script>
@endsection
