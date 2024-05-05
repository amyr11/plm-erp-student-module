<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BirthplaceCity extends Model
{
    use HasFactory;

    /**
     * Get the students born in each city.
     */
    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }
}