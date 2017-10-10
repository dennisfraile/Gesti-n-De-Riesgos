@extends('layouts.master')

@section('title','Lista de Tratamientos')

@section('content')

   <!-- Main component for a primary marketing message or call to action -->
   
  <ol class="breadcrumb">
     <li><a href="{{url('dashboard')}}">Principal</a></li>
     <li class="active">Tratamiento de Riesgo</li>
   </ol>
   <div class="page-header">
     <h1>Tratamientos <small>Registrados hasta este momento</small></h1>
   </div>
  
   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
             Lista
             <p class="navbar-text navbar-right" style=" margin-top: 1px;">
                <button type="button" id='nuevo'  name='nuevo' class="btn btn-warning navbar-btn" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;">Nuevo</button>
             </p>
           </div>
          <div class="panel-body">

             <table class="table table-bordered">
               <thead>
                  <th>Nombre</th>
                  <th>Descripcion</th>
                  <th>Tipo de Tratamiento</th>
                  <th>Acción</th>
               </thead>
               <tbody>
               @foreach($tratamientos as $tratamiento)
                  <tr>
                     <td>{{$tratamiento->nombretratamiento}}</td>
                     <td>{{$tratamiento->descriptratamiento}}</td>
                     <td>{{$tratamiento->id}}</td>
                     <td><a href="{{route('tratamiento_riesgo.edit',$tratamiento->idtratamiento)}}">[Editar]</a> 
                     <a href="{{route('tratamiento_riesgo.show',$tratamiento->idtratamiento)}}">[Eliminar]</a></td>
                  </tr>
               @endforeach
               </tbody>


             </table>
           <div class='text-center'>
              {!!$tratamiento->links()!!}
           </div>

          </div>
        </div>


     </div>
   </div>

<script>
  $("#nuevo").click(function(event)
  {
      document.location.href = "{{ route('tratamiento_riesgo.create')}}";
  });
</script>
  
@endsection