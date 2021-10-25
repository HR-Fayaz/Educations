<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher_school extends Model
{
    use HasFactory;

    public $timestamps=false;

    protected $guarded=[];

//    public function headmaster()
//    {
//        return $this->hasOne(headmaster::class);
//    }

}
