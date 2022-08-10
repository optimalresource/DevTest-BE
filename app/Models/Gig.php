<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

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

    protected function creator() {
        return $this->belongsToMany(User::class, 'id', 'creator');
    }
}
