<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table ="category";
    protected $fillable = ['id','name','status'];

    public $timestamps=false;
    use HasFactory;
}
