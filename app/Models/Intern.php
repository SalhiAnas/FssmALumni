<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intern extends Model
{
    use HasFactory;

    protected $table = "stories";

    protected $fillable = ['title','company','duration','location','start_time','job_type','description','experience_skills','education_certificates'];
}
