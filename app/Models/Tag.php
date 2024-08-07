<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory, HasUlids;
    protected $fillable =[
        'name', 'taggable_type', 'taggable_id'
    ];
}