<?php

namespace App\Models;
use App\Models\User;
use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $table="_package";
    protected $guarded=[];
    
    public function members(){
        return $this->hasMany(Member::class);
    }
}

