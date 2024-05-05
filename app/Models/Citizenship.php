<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Citizenship extends Model
{
    use HasFactory;

    /**
     * Get the students associated with each citizenship.
     */
    public function students(): BelongsToMany
    {
        return $this->belongsToMany(Student::class);
    }
}