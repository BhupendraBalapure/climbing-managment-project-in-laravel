<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Franchisee extends Model
{
    use HasFactory;
    protected $table = 'franchisees';
    protected$fillable = ['full_name',
    'company_name',
    'location',
    'email',
    'phone'];
}
