@extends('layouts.menus.management')
@section('content')
    <section class="content">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        {{ $menu_list->name ?? '' }}
                        - Ingredients
                    </h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="bg-info">
                            <tr>
                                <th>
                                    No
                                </th>

                                <th style="text-align: center">
                                    Ingredients
                                </th>

                                <th style="text-align: center">
                                    Unit
                                </th>

                                <th style="text-align: center">
                                    Number of Unit
                                </th>

                                <th style="text-align: center">
                                    Price/ Kg
                                </th>

                                <th style="text-align: center">
                                    Total Amount
                                </th>

                                <th style="text-align: center">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>

                                <td>
                                    <select class="form-control select2" name="ingredient_id" id="ingredientId">
                                        <option value="">
                                            -- Please Select --
                                        </option>
                                        @foreach ($ingredients as $ingredient)
                                            <option value="{{ $ingredient->id }}">
                                                {{ $ingredient->name ?? '' }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('ingredient_id')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </td>

                                <td>
                                    <input style="height: 33px;" class="form-control" type="text" id="Unit">
                                </td>

                                <td>
                                    <input style="height: 33px;" class="form-control" type="text" id="NumberOfUnit">
                                </td>

                                <td>
                                    <input style="height: 33px;" class="form-control" type="text" id="Price">
                                </td>

                                <td colspan="2">
                                    <input class="btn btn-info btn-sm form-control" type="button" value="Save"
                                        onclick="saveMenuIngredient()">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreMenuLists', '#create-form') !!}
    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="ingredient_id"]').on('change', function() {
                var ingredient_id = $(this).val();
                var url = '{{ url('get_ingredient') }}';
                if (ingredient_id) {
                    $.ajax({
                        url: url + '/' + ingredient_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $("#Unit").val(data.unit);
                        }
                    });
                }
            });
        });

        function saveMenuIngredient() {
            var ingredientId = document.getElementById("ingredientId").value;
            var NumberOfUnit = document.getElementById("NumberOfUnit").value;
            var Price = document.getElementById("Price").value;

            if (ingredientId == null || ingredientId == "") {
                alert("Please Select  Ingredient");
                return false;
            }

            var url = '{{ url('store_menu_ingredient') }}';
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                method: 'POST',
                url: url,
                data: {
                    ingredient_id: ingredientId,
                    no_of_unit: NumberOfUnit,
                    price: Price,
                },
                success: function(data) {
                    console.log(data)
                },
                error: function(data) {}
            });
        }
    </script>
@endsection
