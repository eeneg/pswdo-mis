<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory, HasUlids;
    protected $fillable =[
        'name', 'address', 'building', 'room'
    ];
}
