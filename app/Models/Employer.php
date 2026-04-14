<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employer extends Model
{
    use HasFactory;

    // Define the hasMany relationship with Job
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
