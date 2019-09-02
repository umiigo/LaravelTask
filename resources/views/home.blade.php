@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$companies->count()}}</h3>

                <p>Companies</p>
              </div>
              <div class="icon">
                <i class="ion ion-home"></i>
              </div>
                <a href="{{route('admin.companies.index')}}" class="small-box-footer"><i class="fas fa-list"></i>&nbsp&nbsp View Companies</a>
                <a href="{{route('admin.companies.create')}}" class="small-box-footer"><i class="fas fa-plus-square"></i>&nbsp&nbsp Add Company</a>
            </div>
          </div>
          <!-- ./col -->
          
          
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$employees->count()}}</h3>

                <p>Employees</p>

              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
               <a href="{{route('admin.employees.index')}}" class="small-box-footer"><i class="fas fa-list"></i>&nbsp&nbsp View Employees</a>
                <a href="{{route('admin.employees.create')}}" class="small-box-footer"><i class="fas fa-plus-square"></i>&nbsp&nbsp Add Employee</a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        </div>
        <!-- /.row (main row) -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
