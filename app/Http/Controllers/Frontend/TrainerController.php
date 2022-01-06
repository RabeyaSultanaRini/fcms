<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Addtrainer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function TrainerList(){
        $trainers=Addtrainer::all();
        return view('website.partial.trainerlist',compact('trainers'));
    }
}
