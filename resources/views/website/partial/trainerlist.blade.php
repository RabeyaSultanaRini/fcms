
      <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}">

<div class="container" >
<h3 class="font-weight-bold">Trainer List</h3>
<!-- search button -->
  
</nav>

<div class="form-colume">
<!-- <table class="table table-dark">
  <thead>
    <tr>
    <th scope="col">SL</th>
      <th scope="col">Trainer Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Time Slot</th>
      <th scope="col">Membership Number</th>
      <th scope="col">Age</th>


     
    </tr>
  </thead>
  <tbody>
      @foreach($trainers as $key=>$trainer)
    <tr>
      <th >{{$key+1}}</th>
      <td>{{$trainer->name}}</td>
      <td>{{$trainer->Email}}</td>
      <td>{{$trainer->Address}}</td>
      <td>{{$trainer->Contact_Number}}</td>
      <td>{{$trainer->Time_Slot}}</td>
      <td>{{$trainer->Membership_Number}}</td>
      <td>{{$trainer->Age}}</td>
    

    </tr>
    @endforeach
  </tbody>
</table> -->
<div class="row">
  @foreach($trainers as $key=>$trainer)
  <div class="col-lg-4" style="margin-bottom: 20px;">
  <div class="card" style="width: 18rem; border-radius: 9%;">
  <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
  <div class="card-body" >
    <h5 class="card-title">{{$trainer->name}}</h5>
    <h5 class="card-title">{{$trainer->Email}}</h5>

    <h5 class="card-title">{{$trainer->Address}}</h5>
    <h5 class="card-title">{{$trainer->Contact_Number}}</h5>
    <h5 class="card-title">{{$trainer->Time_Slot}}</h5>
    <h5 class="card-title">{{$trainer->Membership_Number}}</h5>
    <h5 class="card-title">{{$trainer->Age}}</h5>
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
  </div>
</div>
</div>
  @endforeach
</div>
</div>

