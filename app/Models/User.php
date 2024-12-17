<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, AuthenticatableTrait, Notifiable;

    protected $fillable = [
        'username', 
        'email', 
        'password', 
        'contact_no', 
        'email_verified_at', // Add this column here
    ];
}
