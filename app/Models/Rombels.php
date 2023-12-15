<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rombels extends Model
{
    use HasFactory;

    protected $fillable = [
        'rombels'
    ];

    public function students() {
        return $this->hasMany(students::class);
    }
}
