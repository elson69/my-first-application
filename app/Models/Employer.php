<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

    // Mass assignable fields
    protected $fillable = ['name'];

    // Define relationship: an employer has many jobs
    public function jobs()
    {
        return $this->hasMany(\App\Models\Job::class);
    }
}
