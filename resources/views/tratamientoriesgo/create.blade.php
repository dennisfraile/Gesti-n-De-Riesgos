@extends('layouts.master')

@section('title','Tratamiento Nuevo')

@section('content')
<!-- Main component for a primary marketing message or call to action -->
   <ol class="breadcrumb">
     <li><a href="{{url('dashboard')}}">Principal</a></li>
     <li><a href="{{url('dashboard')}}">Tratamiento de Riesgos</a></li>
    <li class="active">Nuevo Tratamiento de Riesgos</li>

   </ol>


   <div class="page-header">
     <h1>Tratamiento Nuevo</h1>
   </div>

   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
            Nuevo Tratamiento
           </div>
          <div class="panel-body">
 {!!Form::open(['route'=>'tratamientoriesgo.store','method'=>'POST'])!!}
            
	      <div class="form-group">
                  {!!form::label('Nombre')!!}
                  {!!form::text('nombretratamiento',null,['idnombretrata'=>'nombretratamiento','class'=>'form-control','placeholder'=>'Digite El Nombre del Tratamiento'])!!}
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">descripcion</label>
                  {!!form::label('Descripcion del Tratamiento')!!}
                  {!!form::text('descriptratamiento',null,['idtratamiento'=>'descriptratamiento','class'=>'form-control','placeholder'=>'Digite la descripcion del tratamiento'])!!}
             </div>
             <div class="form-group">
                {!!form::label('Tipo de Tratamiento')!!}

             {!! Form::select('id',$tipotratamiento,null,['idtratamiento'=>'id','class'=>'form-control']) !!}

             </div>
                 {!!form::submit('Guardar',['name'=>'guardar','idtratamiento'=>'guardar','content'=>'<span>Guardar</span>','class'=>'btn btn-warning btn-sm m-t-10'])!!}             
          {!!Form::close()!!}

          </div>
        </div>


     </div>
   </div>


@endsection