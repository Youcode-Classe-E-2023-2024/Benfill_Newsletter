<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mail_sent extends Model
{
    use HasFactory;

    public $fillable = [
        'member',
        'mail_template',
        'sender',
        'media'
    ];
}
