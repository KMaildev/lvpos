<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderInfo extends Model
{
    use HasFactory;

    public function table_lists_table()
    {
        return $this->belongsTo(TableList::class, 'table_list_id', 'id');
    }

    public function users_table()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }


    public function users_table_preparation()
    {
        return $this->belongsTo(User::class, 'order_preparation_user_id', 'id');
    }


    public function order_items_table()
    {
        return $this->hasMany(OrderItem::class, 'order_info_id', 'id');
    }
}
