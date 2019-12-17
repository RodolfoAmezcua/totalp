<?php

require_once('crud_cliente.php');
require_once('cliente.php');
$crud=new CrudClientes();
$libro= new Clientes();
//obtiene todos los libros con el método mostrar de la clase crud
$listaClientes=$crud->mostrar();
?>
 
<html>
<!doctype html>
<html lang="en">
<head>
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

	<title>Mostrar clientes</title>
</head>
<body>
<div class="container">
<h1>Listado de clientes</h1>
<div class="table-wrapper">
<table class="table table-bordered">

<thead>
                    <tr>
			<td>Nombre</td>
			<td>Número</td>
			<td>Eliminar</td>
			</tr>
                </thead>
		<body>
			<?php foreach ($listaClientes as $cliente) {?>
			<tr>
				<td><?php echo $cliente->getNombre() ?></td>
				<td><?php echo $cliente->getTelefono() ?></td>
	
				<td><a href="administrar_cliente.php?id=<?php echo $cliente->getId()?>&accion=e">Eliminar</a>   </td>
			</tr>
			<?php }?>
		</body>
	</table>
	<a href="menuprin.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
</div>
</div>
</body>
</html>
