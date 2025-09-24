<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    // Define many-to-many relationship with Job
    public function jobs()
    {
        return $this->belongsToMany(
            \App\Models\Job::class,       // Related model
            'job_listing_tag',             // Pivot table name
            'tag_id',                      // Foreign key on pivot for this model
            'job_listing_id'               // Foreign key on pivot for the related model
        );
    }
}
