<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    use HasFactory;

    /**
     * As One to Many Relationship with Headmasters table
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function headmaster()
    {
        return $this->belongsTo(headmaster::class);
    }

    /**
     * As Many to Many Relationship with Schools table
     */
    public function  schools()
    {
        $this->belongsToMany(school::class,'teacher_schools');
    }

    /**
     *  Has Many Relationship Through Courses table with Students Table
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function courselist()
    {
        return $this->hasManyThrough(cours::class,student::class);
    }

}
