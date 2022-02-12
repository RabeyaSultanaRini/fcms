@extends('admin.master')
@section('main')
<br></br>

<label>select level</label>

<div class="form-group">
    <form action="{{route('admin.member.add.level',$member->id)}}" method="POST">
        @csrf
        @method('PUT')
    <label for="validationCustom05">Enter Level:</label>
    <select name=level>
       @foreach($levels as $level)
       <option value="{{$level->id}}">{{$level->level_type}}>
          @endforeach
       </select>

       <button class="btn btn-primary" type="submit">submit</button>
    </form>
</div>
@endsection