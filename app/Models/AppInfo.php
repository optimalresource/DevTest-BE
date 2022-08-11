<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'motto',
        'hq_address',
        'phone1',
        'phone2',
        'sales_email'
    ];
}
