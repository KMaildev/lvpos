<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'menu_list_id',
        'qty',
        'price',
        'remark',
        'order_info_id',
        'user_id',
        'created_at',
        'updated_at'
    ];

    use HasFactory;

    public function menu_lists_table()
    {
        return $this->belongsTo(MenuList::class, 'menu_list_id', 'id');
    }


    public function user_table()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function preparation_user()
    {
        return $this->belongsTo(User::class, 'preparation_user_id', 'id');
    }

    public function order_info_table()
    {
        return $this->belongsTo(OrderInfo::class, 'order_info_id', 'id');
    }
}
