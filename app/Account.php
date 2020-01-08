<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model {

    protected $table = 'account';
    protected $fillable = [
        'image', 'created_at', 'updated_at'
    ];

}
