@extends('layout')

@section('content')
    <div class="panel alert-info">
      <div class="panel panel-heading">
          <h1>Estudiante</h1>
      </div>
      <div class="panel-body">
        {{ $student->fullname }}
        {{ $student->email }}
      </div>
    </div>
@endsection



	
		
	
   		
		
	