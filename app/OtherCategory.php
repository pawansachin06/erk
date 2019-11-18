<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OtherCategory extends Model
{
    protected $table = 'other_categories';
    protected $fillable = [
        'name'
    ];
}
