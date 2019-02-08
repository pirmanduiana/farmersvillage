<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mstproduct extends Model
{
    //
    protected $table = "mst_product";
    protected $fillable = [        
        'category_id', 'name', 'desc', 'min_pax', 'max_pax', 'currency_id',
        'price', 'show_price','rating', 'featured_img'
    ];

    public function currency()
    {
        return $this->hasOne(Mstcurrency::class, 'id', 'currency_id');
    }
    
}
