<?php

namespace App\Models;

use App\Models\Client;
use App\Models\Lawyer;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LawyerCase extends Model
{
    use HasFactory;

    /**
     * Get the lawyer that owns the LawyerCase
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lawyer()
    {
        return $this->belongsTo(Lawyer::class);
    }

    /**
     * Get the client that owns the LawyerCase
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * Get all of the task for the LawyerCase
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function task()
    {
        return $this->hasMany(Task::class);
    }
}