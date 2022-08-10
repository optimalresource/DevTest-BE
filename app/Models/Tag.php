<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "creator",
        "gig_id"
    ];

    public function tags()
    {
        return $this->belongsToMany(Gig::class, 'id', 'gig_id');
    }
}
