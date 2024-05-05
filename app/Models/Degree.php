<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Degree extends Model
{
    use HasFactory;

    /**
     * Get the degree-program associated with the degree.
     */
    public function degreeProgram(): BelongsTo
    {
        return $this->belongsTo(DegreeProgram::class);
    }
}