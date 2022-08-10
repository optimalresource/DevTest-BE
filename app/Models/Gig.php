<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gig extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "creator",
        "minSalary",
        "maxSalary",
        "role",
        "company",
        "country",
        "state",
        "address",
    ];
}
