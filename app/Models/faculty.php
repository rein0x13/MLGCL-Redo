<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faculty extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'employee_type',
        'employee_status',
        'employee_date',
        'designation',
    ];
}
