@extends('layouts.admin')

@section('title','Eliminar TRatamiento')

@section('contenido')

<ol class="breadcrumb">
     <li><a href="{{url('dashboard')}}">Principal</a></li>
     <li><a href="{{url('tratamientoriesgo')}}"> Tratamientos</a></li>
     <li class="active">Eliminar un Tratamiento</li>
   </ol>
 

   <div class="row">
     <div class="col-md-8">

       <div class="panel panel-default">
         <div class="panel-heading">
           Eliminar
          </div>
         <div class="panel-body">

            {!!Form::open(['route'=>['tratamientoriesgo.destroy',$tratamientoriesgos->idtratamiento],'method'=>'DELETE'])!!}
            
             <div class="form-group">
               <label for="exampleInputPassword1">Desea Eliminarlo:</label>                
             </div>
             <div class="form-group">
              {!!form::label('Tratamiento')!!} 
               {!!$tratramientoriesgos->nombretratamiento !!}
             </div>
             <div class="form-group">
               {!!form::label('Descripcion')!!} 
               {!!$tratamientoriesgos->descriptratamiento !!}
             </div>

                 {!!form::submit('Eliminar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Eliminar</span>','class'=>'btn btn-danger btn-sm m-t-10'])!!}

                <button type="button" id= 'cancelar' name='cancelar' class="btn btn-default btn-sm m-t-10" >Cancelar</button>

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
  

@endsection
