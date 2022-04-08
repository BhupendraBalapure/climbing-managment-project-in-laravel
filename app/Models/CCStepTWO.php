<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CCStepTWO extends Model
{
    use HasFactory;
    protected $table = 'c_c_step_t_w_o_s';
    // protected $table1 = 'CreditCard';

    protected $fillable = [ 
        'name',
        'mobile',
        'loan',
        'pan',
        'email',
        'dob',
        'income_source',
        'company_name',
        // 'salary',
        'city',
        'pincode',
        'img_name',
        'pincode',
        'homeaddress',
        'homepincode',
        'credit_id',

        'pan_file_image',
        'aadhaar',
        'income_proof',
        'statment',
        'photo'
            
];


public function creditCard()
{
    return $this->belongsTo(creditCard::class);
}



}