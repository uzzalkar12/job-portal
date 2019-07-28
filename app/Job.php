<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function applicants()
    {
        return $this->belongsToMany(Applicant::class)->withPivot('id', 'applicant_id', 'job_id');
    }


}
