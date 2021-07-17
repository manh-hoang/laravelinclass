<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ="product";
    protected $fillable = ['id','name','price','sale_price','image','category_id','status','description','created_at'];

    public $timestamps=false;
    use HasFactory;
}
