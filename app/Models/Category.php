<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function main_category_table()
    {
        return $this->belongsTo(MainCategory::class, 'main_categorie_id', 'id');
    }
}
