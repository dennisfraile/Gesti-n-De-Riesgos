@extends('layouts.admin')
@section('contenido')
<div class="row">
   <div class="col-lg-12">
   <ol class="breadcrumb">
      <li class="active">
      <i class="fa fa-desktop"></i> Valorar Nuevo Activo</li>
    </ol>
   </div>
</div>

<div class="row">
   <div class="col-lg-12">
         <h3>Valorar Activo</h3>
   </div>
</div>

{!!Form::open(array('url'=>'analisis.create','method'=>'POST','autocomplete'=>'off'))!!}
   {{Form::token()}}

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">    

         <div class="form-group">
               <label class="label label-primary" for="activo">Activo</label>
              @foreach($anactivo as $anac)
               <select class="form-control has-success" name="activo">
      				    <option value="{{ $anac->idactivo }}">{{ $anac->nombreactivo }}</option>
    			     </select>
              @endforeach
         </div>

         <div class="form-group">
               <label class="control-label text-primary" for="disponibilidad">Disponibilidad</label>
               <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="disponibilidad">
    				      <option selected>Seleccionar</option>
    				      <option value="0">Sin valor</option>
    				      <option value="1">Bajo</option>
    				      <option value="2">Medio</option>
    				      <option value="3">Alto</option>
  				      </select>
         </div>
   
         <div class="form-group">
               <label class="control-label text-primary" for="confi">Confidencialidad</label>
               <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="confi">
    				      <option selected>Seleccionar</option>
    				      <option value="0">Sin valor</option>
    				      <option value="1">Bajo</option>
    				      <option value="2">Medio</option>
    				      <option value="3">Alto</option>
    			     </select>
         </div>

         <div class="form-group">
               <label class="control-label text-primary" for="inte">Integridad</label>
               <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inte">
          				<option selected>Seleccionar</option>
          				<option value="0">Sin valor</option>
          				<option value="1">Bajo</option>
          				<option value="2">Medio</option>
          				<option value="3">Alto</option>
    			     </select>
         </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

        <div class="form-group">
               <label class="control-label text-primary" for="degra">Degradacion</label>
                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="degra">
            				<option selected>Seleccionar</option>
            				<option value="100">Muy Alta</option>
            				<option value="75">Alta</option>
            				<option value="50">Medio</option>
            				<option value="25">Bajo</option>
            				<option value="1">Muy Bajo</option>
    			     </select>
        </div>

        <div class="form-group">
             <label class="control-label text-primary" for="proba">Probabilidad de ocurrencia</label>
                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="proba">
          				<option selected>Seleccionar</option>
          				<option value="0.100">Muy Frecuente</option>
          				<option value="0.75">Frecuente</option>
          				<option value="0.50">Normal</option>
          				<option value="0.25">Poco frecuente</option>
          				<option value="0.01">Muy poco frecuente</option>
    			     </select>
        </div>
       
        <div class="form-group">
               <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-floppy-disk"></i> Agregar</button>
               <a href="{{url('analisis')}}" class="btn btn-danger" role="button"><i class="glyphicon glyphicon-remove-circle"></i> Cancelar</a>
        </div>

    </div>

   </div> 

{!!Form::close()!!} 
@endsection