<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Season extends Model
{
    protected $guarded = ['id'];

    public $timestamps = false;

    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class);
    }
}
