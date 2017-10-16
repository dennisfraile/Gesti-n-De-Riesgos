@extends('layouts.admin')
@section('contenido')
<div class="row">
   <div class="col-lg-12">
   <ol class="breadcrumb">
      <li> <i class="fa fa-home"></i> <a href="{{url('/admin/perfilpuesto')}}">Administrar Informacion de la Empresa</a>
      </li>
      <li class="active">
      <i class="fa fa-desktop"></i> Informacion</li>
    </ol>
   </div>
</div>

<div class="row">
   <div class="col-lg-12">
         <h3>Informacion de Empresa</h3>
   </div>
</div>

{!!Form::model($empresa,['method'=>'PATCH','route'=>['empresa.update',$empresa->idempresa]])!!}
{{Form::token()}}

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">    

         <div class="form-group">
               <input type="hidden" name="idempresa" required value="{{$empresa->idempresa}}">
         </div>

         <div class="form-group">
               <label class="control-label text-primary" for="nombreempresa">Nombre</label>
               <input type="text" name="nombreempresa" required value="{{$empresa->nombreempresa}}" class="form-control" placeholder="Nombre de la Empresa...">
         </div>

         <div class="form-group">
               <label class="control-label text-primary" for="descripempresa">Descripcion</label>
               <textarea type="text" name="descripempresa"  required value="{{$empresa->descripempresa}}" class="form-control"  rows="3"  placeholder="Descripcion de la Empresa...">{{$empresa->descripempresa}}</textarea> 
         </div>
   
         <div class="form-group">
               <label class="control-label text-primary" for="alcance">Alcance</label>
               <textarea type="text" name="alcance"  required value="{{$empresa->alcance}}" class="form-control"  rows="3"  placeholder="Alcence...">{{$empresa->alcance}}</textarea> 
         </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

        <div class="form-group">
               <label class="control-label text-primary" for="objetivo">Objetivos</label>
               <textarea type="text" name="objetivo"  required value="{{$empresa->objetivo}}" class="form-control"  rows="3"  placeholder="Objetivo...">{{$empresa->objetivo}}</textarea> 
         </div>

         <div class="form-group">
               <label class="control-label text-primary" for="sustituye">Politias</label>
               <textarea type="text" name="politica"  required value="{{$empresa->politica}}" class="form-control"  rows="3"  placeholder="politica...">{{$empresa->politica}}</textarea>
        </div>
       
        <div class="form-group">
               <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-floppy-disk"></i> Guardar</button>
               <a href="{{url('empresa')}}" class="btn btn-danger" role="button"><i class="glyphicon glyphicon-remove-circle"></i> Cancelar</a>
        </div>
    </div>

   </div> 

{!!Form::close()!!}  
@endsection