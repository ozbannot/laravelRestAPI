<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductClass extends Model
{
    //use HasFactory;
    protected $table = 'product_classes';

    protected $primaryKey = "product_id";
}
