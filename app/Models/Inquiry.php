<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'product_name',
        'companyname',
        'name',
        'email',
        'phone',
        'quantity',
        'message',
    ];
}
