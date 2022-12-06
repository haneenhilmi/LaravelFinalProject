<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class purshaseTransaction extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    public function product(){
        return $this->belongsTo('App\Models\Product' , 'product_id');
    }
}
