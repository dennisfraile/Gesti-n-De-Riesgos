@extends('layouts.admin')
@section('contenido')
<div class="row">
   <div class="col-lg-12">
   <ol class="breadcrumb">
      <li> <i class="fa fa-home"></i> <a href="{{url('/tratamientoriesgo')}}">Administrar Tratamientos</a>
      </li>
      <li class="active">
      <i class="fa fa-desktop"></i> Nuevo Tratamiento</li>
    </ol>
   </div>
</div>

<div class="row">
   <div class="col-lg-12">
         <h3>Nuevo Tratamiento</h3>
   </div>
</div>


{!!Form::open(array('url'=>'tratamientoriesgo','method'=>'POST','autocomplete'=>'off'))!!}
   {{Form::token()}}

<div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      

         <div class="form-group">
               <label for="nombretratamiento">Nombre Tratamiento</label>
               <input type="text" name="nombretratamiento" required value="{{old('nombretratamiento')}}" class="form-control" placeholder="Nombre...">
         </div>

           <div class="form-group">
               <label for="descriptratamiento">Descripcion</label>
               <input type="text" name="descriptratamiento" required value="{{old('descriptratamiento')}}" class="form-control" placeholder="Descripcion...">
         </div>


         <div class="form-group">
               <label> Tipo de Tratamiento</label>
               <select name="idtipotratamiento" required  class="form-control">
                  <option value="">Seleccionar Tipo de Tratamiento...</option>
                   @foreach ($tipotratamiento as $tt)
                         <option value="{{$tt->idtipotratamiento}}">{{$tt->nombretipotrata}}</option>
                   @endforeach
               </select>     
         </div>

         <div class="form-group">
            <label> Activo</label>
               <select name="idactivo" required  class="form-control">
               <option value="">Seleccionar el Activo...</option>
                @foreach ($activos as $act)
                      <option value="{{$act->idactivo}}">{{$act->nombreactivo}}</option>
                @endforeach
            </select>     
         </div>

        

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

         <div class="form-group">
               <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-floppy-disk"></i> Guardar</button>
               <a href="{{url('tratamientoriesgo')}}" class="btn btn-danger" role="button"><i class="glyphicon glyphicon-remove-circle"></i> Cancelar</a>
         </div>

       </div>

   </div> 

{!!Form::close()!!}           
               
@endsection