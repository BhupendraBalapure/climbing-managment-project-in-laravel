<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteDev extends Model
{
    use HasFactory;
    protected $table = 'website_devs';
    protected $fillable = ['name',
    'email',
    'phone',
    'org_name',
    'company_name',
    'requirment'];
}
