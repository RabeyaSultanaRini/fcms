<?php

namespace App\Models;
use App\Models\Package;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
