<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roombooking extends Model
{
    use HasFactory;
    protected $guarded=[];



    public function student()
    {
        return $this->belongsTo(User::class,'student_id','id');
    }



    
    public function room()
    {
        return $this->belongsTo(Manageroom::class,'seat_id','id');
    }

}
