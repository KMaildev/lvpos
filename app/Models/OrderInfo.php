<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'table_list_id',
        'order_date',
        'check_in_time',
        'check_out_time',
        'user_id',
        'created_at',
        'updated_at',
        'order_no',
        'bill_no',
        'check_out_status',
        'order_preparation_status',
        'order_preparation_date',
        'order_preparation_user_id',
        'preparation_date',
    ];

    public function table_lists_table()
    {
        return $this->belongsTo(TableList::class, 'table_list_id', 'id');
    }

    public function customer_table()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
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
