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
}
