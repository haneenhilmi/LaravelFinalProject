<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function store(){
        return $this->belongsTo('App\Models\Store' , 'store_id');
    }

    public function purshase_transaction(){
        return $this->hasMany('App\Models\purshaseTransaction');
     }
     
    protected $fillable = ['name', 'description', 'store_id', 'base_price', 'discount_price', 'flag'];

}
