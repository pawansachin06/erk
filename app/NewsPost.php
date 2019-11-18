<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsPost extends Model {

    protected $table = 'news_posts';
    protected $fillable = [
        'title', 'description', 'category_id', 'image', 'created_at', 'updated_at'
    ];

    public function category_name() {
        return $this->hasOne('App\NewsCategory', 'id', 'category_id');
    }

}
