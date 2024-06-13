<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Specify the table if it's not following Laravel's naming convention
    protected $table = 'students';

    // Define the fillable attributes
    protected $fillable = [
        'name',
        'student_id',
        'kulliyyah',
        'year',
    ];
}
