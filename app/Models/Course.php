<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Studentcourse;

class Course extends Model
{
    use HasFactory;
    public function students(){
        return $this -> hasMany(Studentcourse::class, 'cr_id');
    }
}
