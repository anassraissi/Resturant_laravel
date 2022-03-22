@extends('layout')
@section('content')

<table class="table">
  <thead>
    <tr>
      <th>id</th>
      <th >Name</th>
      <th>Email</th>
      <th >Adress</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $resto)
    <tr>
      <td>{{$resto->id}}</td>
      <td>{{$resto->name}}</td>
      <td>{{$resto->email}}</td>
      <td>{{$resto->adresse}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@stop