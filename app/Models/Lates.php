<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lates extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_time_late', 'information', 'bukti'
    ];

    
}
