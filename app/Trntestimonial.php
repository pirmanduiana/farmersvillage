<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trntestimonial extends Model
{
    //
    protected $table = "trn_testimonial";
    protected $fillable = [        
        'guest_name',
        'post_date',
        'subject',
        'message'
    ];
}
