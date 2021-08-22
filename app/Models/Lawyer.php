<?php

namespace App\Models;

use App\Models\LawyerCase;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lawyer extends Model
{
    use HasFactory;

    /**
     * Get all of the lawyerCase for the Lawyer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lawyerCase()
    {
        return $this->hasMany(LawyerCase::class);
    }
}