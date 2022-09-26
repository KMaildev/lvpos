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
}
