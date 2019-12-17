<?php

require_once('crud_cliente.php');
require_once('cliente.php');
 
$crud= new CrudClientes();
$cliente= new Clientes();
 

	if (isset($_POST['insertar'])) {
		$cliente->setNombre($_POST['nombre']);
		$cliente->setTelefono($_POST['telefono']);
		$crud->insertar($cliente);
		header('Location: ../index.php');

	}elseif(isset($_POST['actualizar'])){
		$cliente->setId($_POST['id']);
		$cliente->setNombre($_POST['nombre']);
		$cliente->setTelefono($_POST['telefono']);
		$crud->actualizar($cliente);
		header('Location: index.php');

	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: index.php');		

	}
?>