<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    // Make sure to specify the fields that can be mass-assigned
    protected $fillable = [
        'heading',
        'detail_subcontent',
        'subtitle1',
        'textcontent1',
        'subtitle2',
        'textcontent2',
        'image_url',
    ];
}