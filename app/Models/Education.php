<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $table = 'educations'; // Specify the table name

    protected $fillable = [
        'starting_date',
        'university_name',
        'subject',
        'description',
    ];
}
