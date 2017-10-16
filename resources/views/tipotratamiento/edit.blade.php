@extends('layouts.admin')

@section('title','Editar Tipo Tratamiento')

@section('contenido')

<ol class="breadcrumb">
     <li><a href="{{url('dashboard')}}">Principal</a></li>
     <li><a href="{{url('tipotratamiento')}}"> Tipo Tratamientos</a></li>
     <li class="active">Editar Tipo de Tratamiento</li>
   </ol>
 

   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
             Editar Tipo Tratamiento
           </div>
          <div class="panel-body">


            {!!Form::model($tratamientoriesgos,['route'=>['ttiporatamiento.update',$tipotratamientos->idtipotratamiento],'method'=>'PUT'])!!}
            
	      <div class="form-group">
                  {!!form::label('Nombre')!!}
                  {!!form::text('nombretipotrata',null,['idtipotratamiento'=>'nombretipotrata','class'=>'form-control','placeholder'=>'Digite el  Nombre'])!!}
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">Descripcion</label>
                  {!!form::label('Descripcion')!!}
                  {!!form::text('descriptipotrata',null,['idtipotratamiento'=>'descriptipotrata','class'=>'form-control','placeholder'=>'Digite la descripcion'])!!}
             </div>
                 {!!form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning btn-sm m-t-10'])!!}
              <button type="button" id='cancelar'  name='cancelar' class="btn btn-info btn-sm m-t-10" >Cancelar</button>             
          {!!Form::close()!!}


           </div>
        </div>

           
           </div>
   </div>

<script>
  $("#cancelar").click(function(event)
  {
      document.location.href = "{{ route('tratamientoriesgo.tratamientoriesgo')}}";
  });
</script>
@stop