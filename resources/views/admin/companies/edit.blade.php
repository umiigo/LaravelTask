@extends('layouts.admin')
@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit company</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Edit company</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
      	<form method="post" action="{{route('admin.companies.update', $company->id)}}" enctype="multipart/form-data">
          @method('PUT')
      		<input type="hidden" name="_token" value= "{{ csrf_token() }}">
      		<div class="form-group">
      		 <div class="row">
      			<label class="col-md-3">Name</label>
      			<div class="col-md-6"><input type="text" name="name" class="form-control" value="{{ $company->name}}"></div>
      			<div class="clearfix"></div>
      		 </div>
      		</div>
      		<div class="form-group">
      		 <div class="row">
      			<label class="col-md-3">Email</label>
      			<div class="col-md-6"><input type="text" name="email" class="form-control" value="{{ $company->email}}"></div>
      			<div class="clearfix"></div>
      		 </div>
      		</div>
      		<div class="form-group">
      		 <div class="row">
      			<label class="col-md-3">Website</label>
      			<div class="col-md-6"><input type="text" name="website" class="form-control" value="{{ $company->website}}"></div>
      			<div class="clearfix"></div>
      		 </div>
      		</div>
          
          <div class="form-group">
           <div class="row">
            <label class="col-md-3">Logo</label>
            <div class="col-md-9"><input type="file" name="logo"></div>
            <div class="clearfix"></div>
            @if($company->logo)
            <div class="col-md-3"></div>
            <div class="col-md-9">
              <img src="{{ asset('storage/logos/'.$company->logo) }}" style="width:150px;">
              <div class="clearfix"></div>
            @endif
           </div>
          </div>
      		<div class="form-group">
      			<input type="submit" class="btn btn-info" value="Save">
      		</div>
      	</form>
      </div>
    </section>
@endsection
