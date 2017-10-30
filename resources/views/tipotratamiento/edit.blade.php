@extends('layouts.admin')
@section('contenido')

<div class="row">
   <div class="col-lg-12">
      <ol class="breadcrumb">
         <li> <i class="fa fa-home"></i> <a href="{{url('/admin/perfilpuesto')}}"> Administrar tipo de tratamiento</a></li>
         <li class="active"> <i class="fa fa-desktop"></i> Editar informacion del tipo de tratamiento</li>
      </ol>
   </div>
</div>

<div class="row">
   <div class="col-lg-12">
      <h3>Editar Perfil de Puesto</h3>
   </div>
</div>
{!!Form::model($tipotratamiento,['method'=>'PATCH','route'=>['tipotratamiento.update',$tipotratamiento->idtipotratamiento]])!!}
{{Form::token()}}

<div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      

         <div class="form-group">
               <label for="nombretipotrata">Nombre Activo</label>
               <input type="text" name="nombretipotrata" required value="{{$tipotratamiento->nombretipotrata}}" class="form-control" placeholder="Nombre...">
         </div>

           <div class="form-group">
               <label for="descriptipotrata">Descripcion</label>
               <input type="text" name="descriptipotrata" required value="{{$tipotratamiento->descriptipotrata}}" class="form-control" placeholder="Descripcion...">
         </div>
      
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

         <div class="form-group">
               <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-floppy-disk"></i> Guardar</button>
               <a href="{{url('tipotratamiento')}}" class="btn btn-danger" role="button"><i class="glyphicon glyphicon-remove-circle"></i> Cancelar</a>
         </div>

       </div>

   </div>
</div>


{!!Form::close()!!}			
@endsection