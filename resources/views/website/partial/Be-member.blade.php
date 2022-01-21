<link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}"> 

<div class="container" >
<h3 class="font-weight-bold">Be member</h3>
</nav>
<br>
<br>

<form action="{{route('admin.member.store.website')}}" method="POST">
  @csrf
  <div class="form-colume">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">member Name</label>
      <select name=member_Name class="form-control">
        @foreach($user as $user)

        <option value="{{$user->id}}">{{$user->name}}</option>
          
          @endforeach
        </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Email</label>
      <input name="Email" class="form-control" id="inputPassword4" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input name="Address" class="form-control" id="inputAddress" placeholder="Address">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Contact Number</label>
    <input name="Contact_Number" class="form-control" id="inputAddress2" placeholder="Contact Number">
  </div>
  <div class="form-row ">
    <div class="form-group col-md-4">
      <label for="inputCity">Time Slot</label>
      <input name="Time_Slot" class="form-control" id="inputCity"placeholder="Time Slot">
    </div>
    
    <div class="form-group col-md-2">
      <label for="inputZip">Age</label>
      <input name="Age" class="form-control" id="inputZip"placeholder="Age">
    </div>
  </div>
  <div class="form-group">
    <label for="validationCustom05">Enter packages:</label>
    <select name=package_name>
       @foreach($packages as $package)
       <option value="{{$package->id}}">{{$package->package_name}}>
          @endforeach
       </select>
</div>
</div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary"> Submit</button>
</form>
</div>



