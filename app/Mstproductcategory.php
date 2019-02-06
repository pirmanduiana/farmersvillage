<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mstproductcategory extends Model
{
    //
    protected $table = "mst_product_category";
    protected $fillable = [        
        'name'
    ];
}
