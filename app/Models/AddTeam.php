<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddTeam extends Model
{
    use HasFactory;
     protected $table = 'add_teams';
     protected $fillable = ['team_name'];
}
