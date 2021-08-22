<?php

namespace App\Models;

use App\Models\LawyerCase;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    /**
     * Get all of the lawyercase for the Client
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lawyercase()
    {
        return $this->hasMany(LawyerCase::class);
    }
}