<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class headmaster extends Model
{
    use HasFactory;

    /**
     * As Many to Many Relationship with Teachers table
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teachers()
    {
        return $this->hasMany(teacher::class);
    }

    /**
     * As One to One Relationship with School table
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function school()
    {
        return $this->belongsTo(school::class);
    }

    /**
     * As One to Many Relationship with Students table
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function students()
    {
        return $this->hasMany(student::class);
    }
}
