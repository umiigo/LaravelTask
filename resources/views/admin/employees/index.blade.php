@extends('layouts.admin')
@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Employees</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Employees</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
      	<p>
      		<a href="{{route('admin.employees.create')}}" class="btn btn-primary">Add New Employee</a>
      	</p>
      	<table class="table table-bordered table-striped">
      		<tr>
      			<th>ID</th>
      			<th>FIRST NAME</th>
      			<th>LAST NAME</th>
      			<th>EMAIL</th>
      			<th>PHONE</th>
      			<th>COMPANY</th>
      			<th>ACTION</th>
      		</tr>
      		@foreach($employees as $e)
      		<tr>
      			<td>{{$e->id}}</td>
      			<td>{{$e->first_name}}</td>
      			<td>{{$e->last_name}}</td>
      			<td>{{$e->email}}</td>
      			<td>{{$e->phone}}</td>
      			<th>COMPANY</th>
      			<th><a href="#" class="btn btn-info">Edit</a> <a href="#" class="btn btn-danger">Delete</a></th>
      		</tr>
      		@endforeach
      	</table>
      </div>
    </section>
@endsection
