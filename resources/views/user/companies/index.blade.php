@extends('layouts.user')
@section('content')

    <section class="content">
      <div class="container-fluid">

      	<table class="table table-bordered table-striped">
      		<tr>
            <th>LOGO</th>
      			<th>ID</th>
      			<th>NAME</th>
      			<th>EMAIL</th>
      			<th>WEBSITE</th>
      		</tr>
          @if(count($companies))
      		@foreach($companies as $c)
      		<tr>
            <td><img src="{{ asset('storage/logos/'.$c->logo) }}" style="width:50px;"></td>
      			<td>{{$c->id}}</td>
      			<td>{{$c->name}}</td>
      			<td>{{$c->email}}</td>
      			<td>{{$c->website}}</td>
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





