<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class participates extends Model
{
    use HasFactory;
    protected $fillable = [
        'participate_id',
        'present',
        'event_id',
        'user_id'


    ];
}
