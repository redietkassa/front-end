@extends('layout.app')
@section('contents')
<div class="container">
  <div class="row">
     <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-success">
           <div class="panel-heading">List of clients</div>
              @if(Auth::check())
<!--Table-->
<table class="table">
<tr>
<th>client</th>
<th>case</th>
</tr>
@foreach($characters as $key => $value)
<tr>
<td>{{$key}}</td><td>{{$value}}</td>
</tr>
@endforeach
</table>
@endif
</div>
@if(Auth::guest())
<a href="/login" class="btn btn-info">
@endif
</div>
</div>
</div>
@endsection