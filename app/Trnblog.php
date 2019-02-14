<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Mstblogcategory;

class Trnblog extends Model
{
    //
    protected $table = "trn_blog";
    protected $fillable = [
        'category_id',
        'title',
        'content',
        'featured_img',
        'published'
    ];

    public function category()
    {
        return $this->hasOne(Mstblogcategory::class, 'id', 'category_id');
    }
}
