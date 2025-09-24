<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    // Specify the table name if it's not the default 'jobs'
    protected $table = 'job_listings';

    // Mass assignable fields
    protected $fillable = ['title', 'salary', 'employer_id'];

    // One-to-many relationship: a Job belongs to an Employer
    public function employer()
    {
        return $this->belongsTo(\App\Models\Employer::class);
    }

    // Many-to-many relationship: a Job has many Tags
    public function tags()
    {
        return $this->belongsToMany(
            \App\Models\Tag::class,       // Related model
            'job_listing_tag',             // Pivot table
            'job_listing_id',              // Foreign key for this model in pivot
            'tag_id'                       // Foreign key for related model in pivot
        );
    }
}
