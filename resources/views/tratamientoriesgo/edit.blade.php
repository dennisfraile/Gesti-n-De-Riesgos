@extends('layouts.admin')

@section('title','Editar Producto')

@section('content')

<ol class="breadcrumb">
     <li><a href="{{url('dashboard')}}">Escritorio</a></li>
     <li><a href="{{url('tratamientoriesgo')}}"> Tratamientos</a></li>
     <li class="active">Editar Tratamiento</li>
   </ol>
 

   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
             Editar Tratamiento
           </div>
          <div class="panel-body">


            {!!Form::model($tratamientoriesgos,['route'=>['tratamiento.update',$tratamientoriesgos->id],'method'=>'PUT'])!!}
            
	      <div class="form-group">
                  {!!form::label('Nombre')!!}
                  {!!form::text('nombretratamiento',null,['idtratamiento'=>'nombretratamiento','class'=>'form-control','placeholder'=>'Digite el  Nombre'])!!}
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">Descripcion</label>
                  {!!form::label('Descripcion')!!}
                  {!!form::text('descriptratamiento',null,['idtratamiento'=>'descriptratamiento','class'=>'form-control','placeholder'=>'Digite la descripcion'])!!}
             </div>
             <div class="form-group">
                {!!form::label('Tipo de Tratamiento')!!}

                {!! Form::select('idtipotratamiento',$marks,null,['idtipotratamiento'=>'idtipotratamiento','class'=>'form-control']) !!}

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