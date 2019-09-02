@extends('layouts.admin')
@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Company</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Add Company</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
      	<form method="post" action="{{route('admin.companies.store')}}">
      		<input type="hidden" name="_token" value= "{{ csrf_token() }}">
      		<div class="form-group">
      		 <div class="row">
      			<label class="col-md-3">Name</label>
      			<div class="col-md-6"><input type="text" name="name" class="form-control"></div>
      			<div class="clearfix"></div>
      		 </div>
      		</div>
      		<div class="form-group">
      		 <div class="row">
      			<label class="col-md-3">Email</label>
      			<div class="col-md-6"><input type="text" name="email" class="form-control"></div>
      			<div class="clearfix"></div>
      		 </div>
      		</div>
      		<div class="form-group">
      		 <div class="row">
      			<label class="col-md-3">Website</label>
      			<div class="col-md-6"><input type="text" name="website" class="form-control"></div>
      			<div class="clearfix"></div>
      		 </div>
      		</div>
      		<div class="form-group">
      			<input type="submit" class="btn btn-info" value="Save">
      		</div>
      	</form>
      </div>
    </section>
@endsection
