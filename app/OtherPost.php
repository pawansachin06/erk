<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class OtherPost extends Model {

    protected $table = 'other_posts';
    protected $fillable = [
        'title', 'description', 'category_id', 'image', 'created_at', 'updated_at'
    ];

    public function category_name() {
        return $this->hasOne('App\OtherCategory', 'id', 'category_id');
    }

}
