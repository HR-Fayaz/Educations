<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class school extends Model
{
    //
    use HasFactory;

    /**
     * As One to One Relationship with Headmasters table
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function headmaster()
    {
        return $this->hasOne(headmaster::class);
    }


    /**
     * As Many to Many Relationship with Teachers table
     */
    public function teachers()
    {
        $this->belongsToMany(teacher::class,'teacher_schools');
    }
}
