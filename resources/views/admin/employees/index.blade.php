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
          @if(count($employees))
      		@foreach($employees as $e)
      		<tr>
      			<td>{{$e->id}}</td>
      			<td>{{$e->first_name}}</td>
      			<td>{{$e->last_name}}</td>
      			<td>{{$e->email}}</td>
      			<td>{{$e->phone}}</td>
      			<td>{{$e->company['name']}}</td>
      			<th>
              <a href="{{route('admin.employees.edit', $e->id)}}" class="btn btn-info">Edit</a>
              <a class="btn btn-danger"href="javascript:void(0)" onclick="$(this).parent().find('form').submit()">Delete</a>
                <form method="post" action="{{ route('admin.employees.destroy', $e->id)}}">
                  @method('DELETE')
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
            </th>
      		</tr>
      		@endforeach
          @else
          <tr><td colspan="12">No Employees Found</td></tr>
          @endif
      	</table>
        {{ $employees->render()}}
      </div>
    </section>
@endsection
