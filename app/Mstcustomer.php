<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mstcustomer extends Model
{
    //
    protected $table = "mst_customer";
    protected $fillable = [        
        "full_name", "country_code",
        "email", "phone",
    ];
}
