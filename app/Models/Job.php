<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\jobController;

class Job extends Model
{
    use HasFactory;
    protected $table ='jobs';
    protected $fillable=['name',
    'email',
    'dob',
    'phone',
    'education',
    'job',
    'exp',
    'location',
    'company_name',
    'message'];
}
