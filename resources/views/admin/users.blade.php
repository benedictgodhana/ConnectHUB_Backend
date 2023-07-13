@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>User Management</h1>
@stop

@section('content')
<div style="width:10%">
<button type="button" class="btn btn-block bg-gradient-primary">Add User</button>
</div><br>
<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Contact</th>
      <th>County</th>
      <th>Sub-County</th>
      <th>Area</th>
      <th>Action</th>



    </tr>
  </thead>
  <tbody>
  @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->contact }}</td>
                                <td>{{ $user->county }}</td>
                                <td>{{ $user->sub_county}}</td>
                                <td>{{ $user->area }}</td>
                                <td>
                                <div class="card-body">
                                <div class="btn-group"style="margin-top:-19px">
                                <button  type="button" class="btn btn-warning">Action</button>
                                <button type="button" class="btn btn-warning dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#"><i class="fas fa-edit"></i>Update</a>

                                <a class="dropdown-item" href="#"><i class="fas fa-power-off"></i>Deactivate</a>

                                </div>
                            </div>
                            </div>
             
                                </td>
                            </tr>
                        @endforeach

    
  </tbody>
</table>
@stop

@section('css') 
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop