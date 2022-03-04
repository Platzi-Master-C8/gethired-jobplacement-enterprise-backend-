<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InterviewHistory extends Model
{
    use HasFactory;

    protected $table = 'interviews_history';

    protected $fillable = [
        'interview_id',
        'description',
    ];
}
