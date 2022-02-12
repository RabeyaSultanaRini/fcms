<?php

namespace App\Models;
use App\Models\User;
use App\Models\Level;

use App\Models\Package;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Member extends Model
{
    use HasFactory;

    protected $table="member";
    protected $guarded=[];
    public function packages(){
        return $this->belongsTo(Package::class,'package_id','id');
    }
    public function trainers(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function level(){
        return $this->belongsTo(Level::class,'level_id','id');
    }
}
