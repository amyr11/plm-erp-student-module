<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    use HasFactory;

    
    /**
     * Get the college where the student belongs.
     */
    public function college(): BelongsTo
    {
        return $this->belongsTo(College::class);
    }

    /**
     * Get the degree and program where the student belongs (e.g. degree = Bachelor of Science, program = Computer Science).
     */
    public function DegreeProgram(): BelongsTo
    {
        return $this->belongsTo(DegreeProgram::class);
    }

    /**
     * Get the birthplace city of the student.
     */
    public function birthplaceCity(): HasOne
    {
        return $this->hasOne(BirthplaceCity::class);
    }

    /**
     * Get the citizenships of the student.
     */
    public function citizenships(): BelongsToMany
    {
        return $this->belongsToMany(Citizenship::class);
    }
}