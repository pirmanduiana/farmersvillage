<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Mstblogcategory;
use App\Adminuser;

class Trnblog extends Model
{
    //
    protected $table = "trn_blog";
    protected $fillable = [
        'user_id',
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

    public function user()
    {
        return $this->hasOne(Adminuser::class, 'id', 'user_id');
    }
}
