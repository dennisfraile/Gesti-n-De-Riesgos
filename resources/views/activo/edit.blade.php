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

{!!Form::model($activo,['method'=>'PATCH','route'=>['activo.update',$activo->idactivo]])!!}
{{Form::token()}}

<div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      

         <div class="form-group">
               <label for="nombreactivo">Nombre Activo</label>
               <input type="text" name="nombreactivo" required value="{{$activo->nombreactivo}}" class="form-control" placeholder="Nombre...">
         </div>

           <div class="form-group">
               <label for="descripactivo">Descripcion</label>
               <input type="text" name="descripactivo" required value="{{$activo->descripactivo}}" class="form-control" placeholder="Descripcion...">
         </div>


         <div class="form-group">
               <label> Tipo de Activo</label>
               <select name="idtipoactivo" required  class="form-control">
                   @foreach ($tipoactivo as $ta)
                      @if ($ta->idtipoactivo==$activo->idtipoactivo)
                         <option value="{{$ta->idtipoactivo}}" selected>{{$ta->nombretipoactivo}}</option>
                      @else
                        <option value="{{$ta->idtipoactivo}}">{{$ta->nombretipoactivo}}</option>
                      @endif
                   @endforeach
               </select>     
         </div>

         <div class="form-group">
            <label> Empresa</label>
               <select name="idempresa" required  class="form-control">
                @foreach ($empresas as $emp)
                    @if ($emp->idempresa==$activo->idempresa)
                      <option value="{{$emp->idempresa}}" selected>{{$emp->nombreempresa}}</option>
                    @else
                      <option value="{{$emp->idempresa}}">{{$emp->nombreempresa}}</option>
                    @endif
                @endforeach
            </select>     
         </div>

        

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

         <div class="form-group">
               <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-floppy-disk"></i> Guardar</button>
               <a href="{{url('activo')}}" class="btn btn-danger" role="button"><i class="glyphicon glyphicon-remove-circle"></i> Cancelar</a>
         </div>

       </div>

   </div>
</div>


{!!Form::close()!!}			
@endsection