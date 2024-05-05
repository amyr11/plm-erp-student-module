<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function college(): BelongsTo
    {
        return $this->belongsTo(College::class);
    }

    public function degreeProgram(): BelongsTo
    {
        return $this->belongsTo(DegreeProgram::class);
    }

    public function birthplaceCity(): BelongsTo
    {
        return $this->belongsTo(City::class, 'birthplace_city_id');
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function studentFamily(): HasOne
    {
        return $this->hasOne(StudentFamily::class);
    }

    public function studentClasses(): BelongsToMany
    {
        return $this->belongsToMany(StudentClass::class, 'assigned_classes');
    }
}
