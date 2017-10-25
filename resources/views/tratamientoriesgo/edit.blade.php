@extends('layouts.admin')
@section('contenido')

<div class="row">
   <div class="col-lg-12">
      <ol class="breadcrumb">
         <li> <i class="fa fa-home"></i> <a href="{{url('/admin/perfilpuesto')}}"> Administrar Perfiles </a></li>
         <li class="active"> <i class="fa fa-desktop"></i> Editar Perfil de Puesto</li>
      </ol>
   </div>
</div>

<div class="row">
   <div class="col-lg-12">
      <h3>Editar Perfil de Puesto</h3>
   </div>
</div>

{!!Form::model($tratamiento,['method'=>'PATCH','route'=>['tratamientoriesgo.update',$tratamiento->idtratamiento]])!!}
{{Form::token()}}

<div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      

         <div class="form-group">
               <label for="nombretratamiento">Nombre Tratamiento</label>
               <input type="text" name="nombretratamiento" required value="{{$tratamiento->nombretratamiento}}" class="form-control" placeholder="Nombre...">
         </div>

           <div class="form-group">
               <label for="descriptratamineto">Descripcion</label>
               <input type="text" name="descriptratamineto" required value="{{$tratamiento->descriptratamineto}}" class="form-control" placeholder="Descripcion...">
         </div>


         <div class="form-group">
               <label> Tipo de Tratamiento</label>
               <select name="idtipotratamiento" required  class="form-control">
                   @foreach ($tipotratamiento as $tt)
                      @if ($tt->idtipotratamiento==$tratamiento->idtipotratamiento)
                         <option value="{{$tt->idtipotratamiento}}" selected>{{$tt->nombretipotrata}}</option>
                      @else
                        <option value="{{$tt->idtipotratamiento}}">{{$tt->nombretipotrata}}</option>
                      @endif
                   @endforeach
               </select>     
         </div>

         <div class="form-group">
            <label> EActivo</label>
               <select name="idempresa" required  class="form-control">
                @foreach ($activos as $act)
                    @if ($act->idactivo==$tratamiento->idactivo)
                      <option value="{{$act->idactivo}}" selected>{{$act->nombreactivo}}</option>
                    @else
                      <option value="{{$act->idactivo}}">{{$act->nombretipotrata}}</option>
                    @endif
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
</div>


{!!Form::close()!!}			
@endsection