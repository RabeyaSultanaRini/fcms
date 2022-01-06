@extends('website.master')
@section('home')
<div class="Features">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Services</h2>
            
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
               <a href="{{route('user.trainerlist',$trainer->id)}}">
                  <div class="Our_box">
                     <i><img src="{{url('frontend/icon/icon1.png')}}" alt="#"/></i>
                     <h4>Trainer List </h4>
                  </div>
               </a>
               </div>
               <div class="col-md-4">
                  <div class="Our_box">
                     <i><img src="{{url('frontend/icon/icon2.png')}}" alt="#"/></i>
                     <h4>Packages  </h4>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="Our_box">
                     <i><img src="{{url('frontend/icon/icon3.png')}}" alt="#"/></i>
                     <h4>Diet</h4>
                  </div>
               </div>
               <div class="col-md-12">
                
               </div>
            </div>
         </div>
      </div>
      @endsection