@extends('adminlte::page')

@section('content')

<div class="box-body">
<table class="table table-hover table-striped" id="sisca-table">

<thead>
    <th>#</th>
    <th>Name</th>
    <th>Email</th>
</thead>

@foreach ($user as $user)
<tbody>
    <td>{{$user->id}}</td>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
</tbody>
@endforeach
</table>
</div>


@endsection


@section('css')
<link rel="stylesheet" href="{{asset('css/admin_costom.css')}}">
@endsection 