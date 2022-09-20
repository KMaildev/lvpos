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
                        <tbody id="MenuIngredientList">
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
            var menu_list_id = '{{ $menu_list->id }}';

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
                    menu_list_id: menu_list_id,
                },
                success: function(data) {
                    getMenuIngredient();
                },
                error: function(data) {}
            });
        }

        function getMenuIngredient() {
            var menu_list_id = '{{ $menu_list->id }}';
            var url = '{{ url('get_menu_ingredient') }}';
            $.ajax({
                url: url + '/' + menu_list_id,
                method: "GET",
                success: function(data) {
                    let menu_ingredient_list = '';
                    $.each(JSON.parse(data), function(key, value) {
                        let k = key + 1;
                        menu_ingredient_list += '<tr>';
                        //Sr.No	
                        menu_ingredient_list += '<td>' + k + '</td>'

                        // Ingredients
                        menu_ingredient_list += '<td>'
                        menu_ingredient_list += value.ingredients_table.name;
                        menu_ingredient_list += '</td>'

                        // Unit
                        menu_ingredient_list += '<td>'
                        menu_ingredient_list += value.ingredients_table.unit;
                        menu_ingredient_list += '</td>'

                        // No Of Unit 
                        menu_ingredient_list += '<td style="text-align: right;">'
                        menu_ingredient_list += value.no_of_unit;
                        menu_ingredient_list += '</td>'

                        // Price
                        menu_ingredient_list += '<td style="text-align: right;">'
                        menu_ingredient_list += value.price;
                        menu_ingredient_list += '</td>'

                        // Total Amount
                        totalAmount = value.no_of_unit * value.price;
                        menu_ingredient_list += '<td style="text-align: right;">'
                        menu_ingredient_list += totalAmount;
                        menu_ingredient_list += '</td>'

                        // Action
                        menu_ingredient_list += '<td>'
                        menu_ingredient_list +=
                            '<a href="javascript:void(0);" class="text-danger remove_item" data-id="' +
                            value.id + '"> Remove</a>'
                        menu_ingredient_list += '</td>'

                        menu_ingredient_list += '</tr>';
                    });
                    $('#MenuIngredientList').html(menu_ingredient_list);
                }
            });
        }
        getMenuIngredient();


        // RemoveItem
        $(document).on("click", ".remove_item", function() {
            var id = $(this).data('id');
            var url = '{{ url('remove_menu_ingredient') }}';
            $.ajax({
                url: url + '/' + id,
                method: "GET",
                success: function(data) {
                    getMenuIngredient();
                }
            });
        });
    </script>
@endsection
