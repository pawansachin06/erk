<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdPurchase extends Model
{
    public $timestamps = false;
    protected $table = 'prod_purchase';
    protected $fillable = [
        'sale_id', 'user_id', 'prod_id', 'validity', 'status' 
    ];
}
