@extends('layouts.admin')
@section('contenido')

<div class="row">
   <div class="col-lg-12">
   <ol class="breadcrumb">
      <li> <i class="fa fa-home"></i> <a href="{{url('vulnerabilidad')}}">Gestionar Vulnerabilidades</a>
      </li>
      <li class="active">
      <i class="fa fa-desktop"></i> Nueva Vulnerabilidad</li>
    </ol>
   </div>
</div>

<div class="row">
   <div class="col-lg-12">
         <h3>Nueva Vulnerabilidad</h3>
   </div>
</div><br>


{!!Form::open(array('url'=>'vulnerabilidad','method'=>'POST','autocomplete'=>'off'))!!}
   {{Form::token()}}

<div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

         <div class="form-group">
               <label for="nombrevulne">Nombre</label>
               <input type="text" name="nombrevulne" required value="{{old('nombrevulne')}}" class="form-control" placeholder="Nombre Vulnerabilidad...">
         </div>

           <div class="form-group">
               <label for="descripvulne">Descripcion</label>
               <input type="text" name="descripvulne" required value="{{old('descripvulne')}}" class="form-control" placeholder="Descripcion Vulnerabilidad...">
         </div> 


         <div class="form-group">
               <label> Amenaza que Representa</label>
               <select name="idamenaza" required  class="form-control">
                  <option value="">Seleccionar Amenaza...</option>
                   @foreach ($amenazas as $ame)
                         <option value="{{$ame->idamenaza}}">{{$ame->nombreamenaza}}</option>
                   @endforeach
               </select>     
         </div><br>
        

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
         <div class="form-group">
               <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-floppy-disk"></i> Guardar</button>
               <a href="{{url('vulnerabilidad')}}" class="btn btn-danger" role="button"><i class="glyphicon glyphicon-remove-circle"></i> Cancelar</a>
         </div>
       </div>

   </div>
</div> 

{!!Form::close()!!}           
               
@endsection