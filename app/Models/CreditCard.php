<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{
    use HasFactory;
    protected $table = 'credit_cards';
    protected $fillable = ['name',
    'mobile',
     ];

     public function CCStepTWO()
     {
         return $this->hasMany(CCStepTWO::class, 'credit_id', 'id');
     }
}
