<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wh_executive extends Model
{
    use HasFactory;
    protected $table ="wh_executives";
    protected $fillable =[ 'customer_name',
    'contact_number',
    'location',
    'company_name',
    'code'
];
}
