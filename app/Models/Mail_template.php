<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mail_template extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'creator',
        'status',
        'flag',
        'used'
    ];
}
