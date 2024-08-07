<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Category extends Model
{
    use HasFactory, HasUlids;

    protected $fillable = [
        'name', 'office_id',
    ];

    public function office()
    {
        return $this->belongsTo(Office::class);
    }

    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }

    public function tags(): MorphToMany
    {
        return $this->morthToMany(Tag::class, 'taggable');
    }
}
