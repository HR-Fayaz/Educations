<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //
    use HasFactory;

    /**
     * As One to Many Relationship with Headmasters table
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function headmaster()
    {
        return $this->belongsTo(headmaster::class);
    }
}
