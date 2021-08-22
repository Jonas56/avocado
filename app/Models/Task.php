<?php

namespace App\Models;

use App\Models\LawyerCase;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    /**
     * Get the lawyercase that owns the Task
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lawyercase()
    {
        return $this->belongsTo(LawyerCase::class);
    }
}