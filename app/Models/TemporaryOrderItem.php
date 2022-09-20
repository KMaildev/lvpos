<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemporaryOrderItem extends Model
{
    use HasFactory;

    public function menu_lists_table()
    {
        return $this->belongsTo(MenuList::class, 'menu_list_id', 'id');
    }
}
