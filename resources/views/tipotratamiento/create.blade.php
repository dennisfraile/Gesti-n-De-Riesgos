@extends('layouts.admin')

@section('title','Tipo de Tratamiento Nuevo')

@section('contenido')
<!-- Main component for a primary marketing message or call to action -->
   <ol class="breadcrumb">
     <li><a href="{{url('dashboard')}}">Principal</a></li>
     <li><a href="{{url('tipotratamiento')}}">Tratamiento de Riesgos</a></li>
    <li class="active">Nuevo Tipo Tratamiento de Riesgos</li>

   </ol>


   <div class="page-header">
     <h1>Tipo Tratamiento Nuevo</h1>
   </div>

   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
            Nuevo Tipo Tratamiento
           </div>
          <div class="panel-body">
 {!!Form::open(['route'=>'tipotratamiento.store','method'=>'POST'])!!}
            
	      <div class="form-group">
                  {!!form::label('Nombre')!!}
                  {!!form::text('nombretipotrata',null,['idtipotratamiento'=>'nombretipotrata','class'=>'form-control','placeholder'=>'Digite El Nombre del Tratamiento'])!!}
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">descripcion</label>
                  {!!form::label('Descripcion del Tipo Tratamiento')!!}
                  {!!form::text('descriptipotrata',null,['idtipotratamiento'=>'descriptipotrata','class'=>'form-control','placeholder'=>'Digite la descripcion del tratamiento'])!!}
             </div>
          {!!form::submit('Guardar',['name'=>'guardar','idtiporatamiento'=>'guardar','content'=>'<span>Guardar</span>','class'=>'btn btn-warning btn-sm m-t-10'])!!}             
          {!!Form::close()!!}

          </div>
        </div>


     </div>
   </div>


@endsection