<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{

    public function updateManagerRemark(Request $request)
    {
        $id = $request->id;
        $value = $request->value;

        $temp = OrderItem::findOrFail($id);
        $temp->manager_remark = $value;
        $temp->update();
        return json_encode(array(
            "statusCode" => 200,
        ));
    }
}
