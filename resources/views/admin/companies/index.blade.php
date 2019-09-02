@extends('layouts.admin')
@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">companies</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">companies</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
      	<p>
      		<a href="{{route('admin.companies.create')}}" class="btn btn-primary">Add New Employee</a>
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
      		@foreach($companies as $c)
      		<tr>
      			<td>{{$c->id}}</td>
      			<td>{{$c->first_name}}</td>
      			<td>{{$c->last_name}}</td>
      			<td>{{$c->email}}</td>
      			<td>{{$c->phone}}</td>
      			<th>COMPANY</th>
      			<th>
              <a href="{{route('admin.companies.edit', $c->id)}}" class="btn btn-info">Edit</a>
              <a class="btn btn-danger"href="javascript:void(0)" onclick="$(this).parent().find('form').submit()">Delete</a>
                <form method="post" action="{{ route('admin.companies.destroy', $c->id)}}">
                  @method('DELETE')
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
            </th>
      		</tr>
      		@endforeach
      	</table>
      </div>
    </section>
@endsection





