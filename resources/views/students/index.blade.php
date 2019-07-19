@extends('layout')
@section('title', 'Estudiantes')
    @section('content')
<div class="feature_area section_gap_top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Lista de Estudiantes</h2>
              <p>
                 Diplomado Educación Superior Basada en Competencias
              </p>
            </div>
          </div>
        </div>
           <div class="row">
          <div class="col-lg-12 col-md-6">
            <div class="col-md-12">
        
        <div class="progress-table-wrap">
          <div class="progress-table">
            <div class="table-head">
              <div class="serial">Codigo </div>
              <div class="country">name</div>
              <div class="country">email</div>             
              <div class="country">Ci</div>
              <div class="visits"></div>
            </div>
             @foreach ($students as $key => $student)
            <div class="table-row">
              <div class="serial">{{ $student->code_siss }}</div>
              <div class="country"> {{ $student->fullname }} </div>
              <div class="country">{{ $student->email }}</div>
              <div class="country">{{ $student->ci  }}</div>
             
              <div class="visits">
                <a href="students/{{ $student->id }}" class="genric-btn success">Ver</a>                
              </div>
            </div> 
               @endforeach  
          </div>
        </div>

          </div>
        </div>
      </div>
    </div>

</div>
             
 @endsection

