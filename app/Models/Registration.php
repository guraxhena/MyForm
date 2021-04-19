<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Registration extends Model
{
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'name', 'lastname', 'email', 'company', 'phone', 'password',
    ];

     protected $hidden = [
      'password', 'remember_token',
    ];
    
}
