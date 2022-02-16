<link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}"> 

<div class="container" >
<h3 class="font-weight-bold">Package List</h3>
</nav>

<div class="form-colume">
<div class="row">
@foreach($Packages as $key=> $Package)
  <div class="col-lg-4" style="margin-bottom: 20px;">
  <div class="card" style="width: 18rem; border-radius: 9%;">
  <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
  <div class="card-body" >
    <h5 class="card-title">Package Name: {{$Package->package_name}}</h5>
    <h5 class="card-title">Package Information: {{$Package->package_info}}</h5>

    <h5 class="card-title">Package Duration: {{$Package->package_duration}}</h5>
   
    <h5 class="card-title">Package Details: {{$Package->package_details}}</h5>
 
  </div>
</div>
</div>
  @endforeach
</div>
</div>