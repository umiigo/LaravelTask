@extends('layouts.user')
@section('content')
  

    <section class="content">
      <div class="container-fluid">
      	<table class="table table-bordered table-striped">
      		<tr>
      			<th>ID</th>
      			<th>FIRST NAME</th>
      			<th>LAST NAME</th>
      			<th>EMAIL</th>
      			<th>PHONE</th>
      			<th>COMPANY</th>
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
