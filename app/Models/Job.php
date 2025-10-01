<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    // Laravel will automatically use the "jobs" table (no need to override)
    protected $guarded = [];

    protected $table = "job_listings";

    /**
     * A job belongs to an employer.
     */
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    /**
     * A job may have many tags.
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey: 'job_listings_id');
    }
}
