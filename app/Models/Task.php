<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title','site_ref','truck_ref','scheduled_at','notes','status'
    ];

    protected $casts = [
        'scheduled_at' => 'datetime',
    ];
}
