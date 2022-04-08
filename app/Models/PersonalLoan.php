<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Exports\personalExport;


class PersonalLoan extends Model
{
    use HasFactory;
    protected $table = 'personal_loans';
    protected $fillable = ['name',
    'mobile',
    'loan',
    'pan',
    'email',
    'dob',
    'income_source',
    'company_name',
    'salary',
    'city',
    'pincode',
    
    'pan_file_image',
    'aadhaar',
    'income_proof',
    'statment',
    'photo'
];
}
