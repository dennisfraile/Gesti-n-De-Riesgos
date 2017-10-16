@extends('layouts.admin')
@section('contenido')
<div class="row">
   <div class="col-lg-12">
   <ol class="breadcrumb">
      <li> <i class="fa fa-home"></i> <a href="{{url('/empresa')}}">Administrar Informacion de la Empresa</a>
      </li>
      <li class="active">
      <i class="fa fa-desktop"></i> Crear Nueva Empresa</li>
    </ol>
   </div>
</div>

<div class="row">
   <div class="col-lg-12">
         <h3>Informacion de Empresa</h3>
   </div>
</div>
 @foreach ($empresa as $emp)
 @endforeach
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">    

         <div class="form-group">
               <label class="control-label text-primary" for="nombreempresa">Nombre</label>
               <input type="text" name="nombreempresa" required value="{{$emp->nombreempresa}}" class="form-control" placeholder="Nombre de la Empresa...">
         </div>

         <div class="form-group">
               <label class="control-label text-primary" for="descripempresa">Descripcion</label>
               <textarea type="text" name="descripempresa"  required value="{{$emp->descripempresa}}" class="form-control"  rows="3"  placeholder="Descripcion de la Empresa...">{{$emp->descripempresa}}</textarea> 
         </div>
   
         <div class="form-group">
               <label class="control-label text-primary" for="alcance">Alcance</label>
               <textarea type="text" name="alcance"  required value="{{$emp->alcance}}" class="form-control"  rows="3"  placeholder="Alcence...">{{$emp->alcance}}</textarea> 
         </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

        <div class="form-group">
               <label class="control-label text-primary" for="objetivo">Objetivos</label>
               <textarea type="text" name="objetivo"  required value="{{$emp->objetivo}}" class="form-control"  rows="3"  placeholder="Objetivo...">{{$emp->objetivo}}</textarea> 
         </div>

         <div class="form-group">
               <label class="control-label text-primary" for="sustituye">Politias</label>
               <textarea type="text" name="politica"  required value="{{$emp->politica}}" class="form-control"  rows="3"  placeholder="politica...">{{$emp->politica}}</textarea>
        </div>
       
        <div class="form-group">
               <a href="{{URL::action('EmpresaController@edit',$emp->idempresa)}}"><button class="btn btn-xs btn-primary"><i class="glyphicon  glyphicon-edit"></i> Editar</button></a>
        </div> 

    </div>

   </div> 
          
               
@endsection