@extends('layouts.admin')
@section('contenido')

<div class="row">
   <div class="col-lg-12">
      <ol class="breadcrumb">
         <li> <i class="fa fa-home"></i> <a href="{{url('/admin/perfilpuesto')}}"> Administrar Control de Riesgos </a></li>
         <li class="active"> <i class="fa fa-desktop"></i> Editar Control de Riesgos</li>
      </ol>
   </div>
</div>

<div class="row">
   <div class="col-lg-12">
      <h3>Editar Control de Riesgos</h3>
   </div>
</div>

@foreach ($control as $con)   
@endforeach

{!!Form::model($control,['method'=>'PATCH','route'=>['control.update',$con->idcontrol]])!!}
{{Form::token()}}

<div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
         

         <div class="form-group">
               <label> Tratamiento de Riesgo</label>
               <select name="idtratamiento" required  class="form-control">
                  <option value="">Seleccionar Tratamiento...</option>
                   @foreach ($tratamiento as $tra)
                      @if ($tra->idtratamiento==$con->idtratamiento)
                          <option value="{{$tra->idtratamiento}}" selected="">{{$tra->nombretratamiento}}</option>
                      @else
                         <option value="{{$tra->idtratamiento}}">{{$tra->nombretratamiento}}</option>
                      @endif
                   @endforeach
               </select>     
         </div>

         <div class="form-group">
               <label for="descripcontrol">Descripcion Control</label>
               <input type="text" name="descripcontrol" required value="{{$con->descripcontrol}}" class="form-control" placeholder="Descripcion...">
         </div>

         <div class="form-group">
            <label> Procedimiento</label>
               <select name="idprocedimiento" required  class="form-control">
               <option value="">Seleccionar Procedimiento...</option>
                @foreach ($procedimiento as $pro)
                      @if ($pro->idprocedimiento==$con->idprocedimiento)
                         <option value="{{$pro->idprocedimiento}}" selected="">{{$pro->nombreproced}}</option>
                      @else
                          <option value="{{$pro->idprocedimiento}}">{{$pro->nombreproced}}</option>
                      @endif
                @endforeach
            </select>     
         </div>

         <div class="row"> 
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
           <div class="form-group">
             <label for="fechainicio">Fecha de Inicio</label>
             <input type="text" name="fechainicio" class="tcal form-control" id="fechainicio" required value="{{$con->fechainicio}}" class="form-control" placeholder="00/00/0000" >
           </div>
         </div>
         </div>

         <div class="row"> 
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
           <div class="form-group">
             <label for="fechafin">Fecha Finalizacion</label>
             <input type="text" name="fechafin" class="tcal form-control" id="fechafin" required value="{{$con->fechafin}}" class="form-control" placeholder="00/00/0000" >
           </div>
         </div>
         </div>

     </div>

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

          <div class="form-group">
            <label> Encargado Control</label>
            <select name="encargado" required  class="form-control">
                <option value="">Seleccionar Encargado...</option>
                @foreach ($encargados as $en)
                      @if ($en->idempleado==$con->encargado)
                         <option value="{{$en->idempleado}}" selected="">{{$en->nombre}}</option>
                      @else
                        <option value="{{$en->idempleado}}">{{$en->nombre}}</option>
                      @endif
                @endforeach
            </select>     
         </div>

         <div class="form-group">
               <label for="estado">Estado</label>
               <input type="text" name="estado" required value="{{$con->estado}}" class="form-control" placeholder="Estado...">
         </div>
   
         <div class="form-group">
               <label for="Presupuesto">Presupuesto</label>
               <input type="text" name="presupuesto" required value="{{$con->presupuesto}}" class="form-control" placeholder="Presupuesto...">
         </div>

         <div class="form-group">
               <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-floppy-disk"></i> Guardar</button>
               <a href="{{url('control')}}" class="btn btn-danger" role="button"><i class="glyphicon glyphicon-remove-circle"></i> Cancelar</a>
         </div>

       </div>

   </div>
    
{!!Form::close()!!}			
@endsection