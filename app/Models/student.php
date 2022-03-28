<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Studentcourse;


class student extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function courses(){
        return $this -> hasMany(Studentcourse::class, 'st_id', 'st_id');
    }
}
