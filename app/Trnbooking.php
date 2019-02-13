<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trnbooking extends Model
{
    //
    protected $table = "trn_booking";
    protected $fillable = [        
        "customer_id", "product_id", "booking_code",
        "booking_date", "pax", "notes"
    ];
}
