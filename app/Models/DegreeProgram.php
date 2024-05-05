<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DegreeProgram extends Model
{
    use HasFactory;

    /**
     * Get the students enrolled to each degree-program (e.g. degree = Bachelor of Science, program = Computer Science).
     */
    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }

    /**
     * Get the degrees associated with each degree-program.
     */
    public function degrees(): HasMany
    {
        return $this->hasMany(Degree::class);
    }

    /**
     * Get the programs associated with each degree-program.
     */
    public function programs(): HasMany
    {
        return $this->hasMany(Program::class);
    }
}