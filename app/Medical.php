<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medical extends Model {

    protected $table = "medicals";
    protected $fillable = [
        'title', 'description', 'category', 'button', 'link', 'image'
    ];

}
