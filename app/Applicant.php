<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    public function jobs()
    {
        return $this->belongsToMany(Job::class)->withPivot('id', 'applicant_id', 'job_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
