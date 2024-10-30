<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applications extends Model
{
    use HasFactory;

    protected $fillable = [
        'complete_name', // Complete Name (FN, MI, S)
        'email',         // Email Address
        'phone_number',  // Phone Number
        'sex',           // Sex (Optional)
        'cv_path'        // Attach Your CV (Path to stored file)
    ];
}
