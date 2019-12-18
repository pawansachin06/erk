<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    protected $table = 'posts';
    protected $fillable = [
        'title', 'description', 'category_id', 'website_image'
    ];

    public function category_name() {
        return $this->hasOne('App\Category', 'id', 'category_id');
    }

}
