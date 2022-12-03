@extends('master.layout')
@section('content')

<div class="container">
  <h2>Product form</h2>
  <form action="/updated/{{$data->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label >PName:</label>
      <input type="text" class="form-control"placeholder="Enter pname" name="pn" value="{{$data->pname}}">
    </div>
    <div class="form-group">
      <label >Pprice:</label>
      <input type="text" class="form-control"placeholder="Enter pprice" name="pp" value="{{$data->pprice}}">
    </div>
    <div class="form-group">
      <label >Pdetails:</label>
      <input type="text" class="form-control"placeholder="Enter pdetails" name="pd" value="{{$data->pdetails}}">
    </div>

    <div class="form-group">
      <label >Psize:</label>
      <input type="text" class="form-control"placeholder="Enter psize" name="ps" value="{{$data->psize}}">
    </div>
    
    

    <div class="form-group">
      <label >Pimg:</label>
      <input type="file" class="form-control"placeholder="Enter img" name="image">
    </div>

    <img src="/image/{{$data->pimage}}" height="100px">

    <button type="submit" class="btn btn-default">Update</button>
  </form>
</div>

@section('content')