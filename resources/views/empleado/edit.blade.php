@extends('layouts.admin')
@section('contenido')
<div class="row">
	<div class="col-lg-12">
	<ol class="breadcrumb">
		<li> <i class="fa fa-home"></i> <a href="{{url('/empleado/')}}"> Administrar Empleados</a>
		</li>
 		<li class="active">
 		<i class="fa fa-desktop"></i> Editar Empleado</li>
    </ol>
	</div>
 </div>
<div class="row">
	<div class="col-lg-12">
			<h3>Editar Empleado : {{$empleado->nombreempleado}}</h3>
	</div>
 </div><br><br>


	{!!Form::model($empleado,['method'=>'PATCH','route'=>['empleado.update',$empleado->idempleado],'files'=>'true'])!!}
	{{Form::token()}}
     
     <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">

        	<div class="form-group">
				<label for="foto"> Foto Empleado </label>
				<input type="file"  class="form-control" name="foto"  >
			</div>

            <div class="form-group">
            	<label for="nombre">Nombre</label>
            	<input type="text" name="nombre" value="{{$empleado->nombreempleado}}" required class="form-control" placeholder="Nombre..." id="nombre">
            </div>
            
            <div class="form-group">
            	<label for="apellido">Apellido</label>
            	<input type="text" name="apellido" value="{{$empleado->apellido}}" required class="form-control" placeholder="Apellido..." id="primerapellido">
            </div>

		</div>
		
		<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">   
			
			<div class="form-group">
            <label for="empresa"> Empresa</label>
              <select name="empresa" required  class="form-control">
                 <option value="">Seleccionar empresa...</option>
                  @foreach ($empresas as $emp)
                     @if ($empleado->idempresa==$emp->idempresa)
                        <option value="{{$empleado->idempresa}}" selected="">{{$emp->nombreempresa}}</option>
                     @else
                       <option value="{{$empleado->idempresa}}">{{$emp->nombreempresa}}</option>
                     @endif
                  @endforeach
              </select>     
          </div>

          <div class="form-group">
            <label for="idrol"> Cargo</label>
              <select name="idrol" required  class="form-control">
                 <option value="">Seleccionar Cargo...</option>
                  @foreach ($roles as $rol)
                     @if ($empleado->idrol==$rol->idrol)
                        <option value="{{$empleado->idrol}}" selected="">{{$rol->nombrerol}}</option>
                     @else
                       <option value="{{$empleado->idrol}}">{{$rol->nombrerol}}</option>
                     @endif
                  @endforeach
              </select>     
          </div>

			<br>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			   <div class="form-group">
			        <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-floppy-disk"></i> Guardar</button>
			        <a href="{{url('empleado')}}" class="btn btn-danger" role="button"><i class="glyphicon glyphicon-remove-circle"></i> Cancelar</a>
			   </div>
			</div>
			
		</div>            
	</div>

	{!!Form::close()!!}		
	@endsection