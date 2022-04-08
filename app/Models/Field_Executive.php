<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field_Executive extends Model
{
    use HasFactory;

    protected $fillable = ['full_name','email','phone','occupation','income','remark',
        't_l_code','e_code','executive_name','status','message','message_exe','adher_front',
        'adher_back',
        'pan',
        'income_prof',
        'photo',
        'statment',
        'bill'
    ];

    public function Users()
    {
        return $this->belongsToMany(User::class,'id','field__executives','id');
    }
}
