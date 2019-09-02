@extends('layouts.admin')
@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Companies</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Companies</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
      	<p>
      		<a href="{{route('admin.companies.create')}}" class="btn btn-primary">Add New Company</a>
      	</p>
      	<table class="table table-bordered table-striped">
      		<tr>
      			<th>ID</th>
      			<th>NAME</th>
      			<th>EMAIL</th>
      			<th>WEBSITE</th>
      			<th>ACTION</th>
      		</tr>
          @if(count($companies))
      		@foreach($companies as $c)
      		<tr>
      			<td>{{$c->id}}</td>
      			<td>{{$c->name}}</td>
      			<td>{{$c->email}}</td>
      			<td>{{$c->website}}</td>
      			<td>
              <a href="{{route('admin.companies.edit', $c->id)}}" class="btn btn-info">Edit</a>
              <a class="btn btn-danger"href="javascript:void(0)" onclick="$(this).parent().find('form').submit()">Delete</a>
                <form method="post" action="{{ route('admin.companies.destroy', $c->id)}}">
                  @method('DELETE')
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
            </td>
      		</tr>
      		@endforeach
          @else
          <tr><td colspan="12">No Companies Found</td></tr>
          @endif
      	</table>
        {{ $companies->render()}}
      </div>
    </section>
@endsection





