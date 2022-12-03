@extends('master.layout')
@section('content')

<div class="container">
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Pname</th>
        <th>pprice</th>
<th>pdetails</th>
<th>psize</th>
<th>pimage</th>
<th>Update</th>	
<th>delete</th>	
      </tr>
    </thead>
    <tbody>
@foreach($data as $d)
      <tr>
        <td>{{$d->id}}</td>
        <td>{{$d->pname}}</td>
        <td>{{$d->pprice}}</td>
<td>{{$d->pdetails}}</td>
<td>{{$d->psize}}</td>
<td><img src="/image/{{$d->pimage}}" height="100px"></td>
<td><a href="/update-product/{{$d->id}}">Update</a></td>
<td><a href="/delete-product/{{$d->id}}">delete</a></td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

@section('content')