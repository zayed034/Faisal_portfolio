<?php

// app/Models/SocialMedia.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;

    protected $table = 'social_media'; // Explicitly specify the table name

    protected $fillable = [
        'facebook', 'twitter', 'youtube', 'linkedin'
    ];
}