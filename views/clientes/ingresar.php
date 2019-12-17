<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Ingresar libro</title>
  </head>
  <body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Agregar <b>Libro</b></h2></div>
                    <div class="col-sm-4">
                        
                    </div>
                </div>
            </div>

        

            <div class="row">
				<form action='administrar_libro.php' method='post'>
				<div class="col-md-6">
					<label>Contacto:</label>
					<input type="text" name="nombre" id="nombres" class='form-control' maxlength="100" required >
				</div>
				<div class="col-md-6">
					<label>Autor:</label>
					<input type="text" name="autor" id="autor" class='form-control' maxlength="100" required>
				</div>
				
				
				<div class="col-md-6">
					<label>Género:</label>
					<input type="genero" name="genero" id="correo_electronico" class='form-control' maxlength="64" required>
				
                </div>
                    
		<input type='hidden' name='insertar' value='insertar'>
				
				<div class="col-md-12 pull-right">
				<hr>
          <button type="submit" class="btn btn-success">Guardar datos</button>
          <a href="menuprin.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
				</div>
				</form>
			</div>
        </div>
    </div>     

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>