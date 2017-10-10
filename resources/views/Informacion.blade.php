<!DOCTYPE html>
 <html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<link rel="stylesheet" href="estilos.css">
		<title>Informacion de la empresa</title>
	</head>
	<body >
		<div class="container">
			<h1 class="text-center">Informacion de la empresa</h1>
			<br>
			<form action="" class="form-horizontal">
				<div class="row">
					<div class="form-group col-md-6">
						<label class="control-label col-sm-5 text-primary" for="NomE">Nombre de la empresa</label>
      					<div class="col-sm-10">
        					<input type="text" class="form-control" id="NomE" name="nombreEmpresa">
      					</div>
      					<label class="control-label col-sm-5 text-primary" for="AlcE">Alcance de la empresa</label>
      					<div class="col-sm-10">
        					<textarea class="form-control" rows="2" id="AlcE" name="alcanceEmpresa" ></textarea> 
      					</div>
      					<label class="control-label col-sm-5 text-primary" for="DescripE">Descripccion de la empresa</label>
      					<div class="col-sm-10">
        					<textarea class="form-control" rows="2" id="DescripE" name="descripccionEmpresa"></textarea>
      					</div>
      					<label class="control-label col-sm-5 text-primary" for="PolE">Politica de la empresa</label>
      					<div class="col-sm-10">
        					<textarea class="form-control" rows="2" id="PolE" name="politicaEmpresa"></textarea>
      					</div>
					</div>
					<div class="form-group col-md-6">
						<br>
						<h4 class="text-success">Objetivos de la empresa</h4>
						<br>
						<label class="control-label col-sm-4 text-primary" for="NomE">Objetivos</label>
      					<div class="col-sm-10">
        					<textarea rows="2" col="50" class="form-control" id="objGe" name="ObjetivoGeneral"></textarea>
      					<br>
      					<div class="col-sm-10">
      						<button type="button" class="btn btn-outline-primary">Guardar</button>
      					</div>
					</div>
				</div>
			</form>
			<br>
		</div>
		
	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>	