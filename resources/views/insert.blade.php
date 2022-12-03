@extends('master.layout')
@section('content')

<div class="container">
  <h2>Product form</h2>
  <form action="/added" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label >PName:</label>
      <input type="text" class="form-control"placeholder="Enter pname" name="pn">
    </div>
    <div class="form-group">
      <label >Pprice:</label>
      <input type="text" class="form-control"placeholder="Enter pprice" name="pp">
    </div>
    <div class="form-group">
      <label >Pdetails:</label>
      <input type="text" class="form-control"placeholder="Enter pdetails" name="pd">
    </div>

    <div class="form-group">
      <label >Psize:</label>
      <input type="text" class="form-control"placeholder="Enter psize" name="ps">
    </div>


      <div class="form-group">
      <label >Pimg:</label>
      <input type="file" class="form-control"placeholder="Enter img" name="image">
    </div>


    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

@section('content')