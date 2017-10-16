@extends('layouts.admin')
@section('contenido')
<div class="row">
   <div class="col-lg-12">
   <ol class="breadcrumb">
      <li> <i class="fa fa-home"></i> <a href="{{url('/control')}}">Administrar Controles</a>
      </li>
      <li class="active">
      <i class="fa fa-desktop"></i> Nuevo Control de Riesgo</li>
    </ol>
   </div>
</div>

<div class="row">
   <div class="col-lg-12">
         <h3>Nuevo Control de Riesgo</h3>
   </div>
</div><br><br>


{!!Form::open(array('url'=>'control','method'=>'POST','autocomplete'=>'off'))!!}
   {{Form::token()}}
 
<div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
         

          <div class="form-group">
            <label> Tratamiento de Riesgo</label>
            <select name="idtratamiento" required  class="form-control">
                <option value="">Seleccionar Tratamiento...</option>
                @foreach ($tratamientos as $tra)
                    <option value="{{$tra->idtratamiento}}">{{$tra->nombretratamiento}}</option>
                @endforeach
            </select>     
         </div>

         <div class="form-group">
               <label for="descripcontrol">Descripcion Control</label>
               <input type="text" name="descripcontrol" required value="{{old('descripcontrol')}}" class="form-control" placeholder="Descripcion...">
         </div>

         <div class="form-group">
            <label> Procedimiento</label>
            <select name="idprocedimiento" required  class="form-control">
               <option value="">Seleccionar Procedimiento...</option>
                @foreach ($procedimientos as $pro)
                    <option value="{{$pro->idprocedimiento}}">{{$pro->nombreproced}}</option>
                @endforeach
            </select>     
         </div>

        <div class="row"> 
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
              <label for="fechainicio">Fecha de Inicio</label>
              <input type="text" name="fechainicio" class="tcal form-control" id="fechainicio" required value="{{old('fechainicio')}}" class="form-control" placeholder="00/00/0000" >
            </div>
          </div>
        </div>

         <div class="row"> 
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
           <div class="form-group">
             <label for="fechafin">Fecha Finalizacion</label>
             <input type="text" name="fechafin" class="tcal form-control" id="fechafin" required value="{{old('fechafin')}}" class="form-control" placeholder="00/00/0000" >
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
                    <option value="{{$en->idempleado}}">{{$en->nombre}}</option>
                @endforeach
            </select>     
         </div>

         <div class="form-group">
               <label for="estado">Estado</label>
               <input type="text" name="estado" required value="{{old('estado')}}" class="form-control" placeholder="Estado...">
         </div>
   
         <div class="form-group">
               <label for="Presupuesto">Presupuesto</label>
               <input type="text" name="presupuesto" required value="{{old('presupuesto')}}" class="form-control" placeholder="Presupuesto...">
         </div>

         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

         <div class="form-group">
               <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-floppy-disk"></i> Guardar</button>
               <a href="{{url('control')}}" class="btn btn-danger" role="button"><i class="glyphicon glyphicon-remove-circle"></i> Cancelar</a>
         </div>

       </div>

       </div>

   </div> 

{!!Form::close()!!}           
               
@endsection