@extends('admin.master')
@section('dashboard')
<div class="content-wrapper"style="background-image:url('{{url('backend/img/lebu.jpg')}}');height:100px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    @if(session()->has('message'))
        <p class="alert alert-success">
            {{session()->get('message')}}
        </p>
    @endif
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          
            <!-- small box -->
            </div>
            </div>
            
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$equipment}}<sup style="font-size: 20px">+</sup></h3>

                <p>Gym Equipments</p>
              </div>
              <div class="icon">
               
              </div>
             
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$member}}<sup style="font-size: 20px">+</sup></h3>



          
                <p> Registrated Member</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
             
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$addtrainers}}<sup style="font-size: 20px">+</sup></h3>

                <p>Trainers</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
             
            </div>
          </div>
          <!-- ./col -->
        </div>
    
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection