
<?php
// incluye la clase Db
require_once('conexion.php');
 
	class CrudClientes{
		// constructor de la clase
		public function __construct(){}
 
		// método para insertar, recibe como parámetro un objeto de tipo libro
		public function insertar($cliente){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO clientes values(NULL,:nombre,:telefono)');
			$insert->bindValue('nombre',$cliente->getNombre());
			$insert->bindValue('telefono',$cliente->getTelefono());
			$insert->execute();
 
		}
 
		// método para mostrar todos los libros
		public function mostrar(){
			$db=Db::conectar();
			$listaClientes=[];
			$select=$db->query('SELECT * FROM clientes');
 
			foreach($select->fetchAll() as $cliente){
				$myLibro= new Clientes();
				$myLibro->setId($cliente['id']);
				$myLibro->setNombre($cliente['nombre']);
				$myLibro->setTelefono($cliente['telefono']);
				
				$listaClientes[]=$myLibro;
			}
			return $listaClientes;
		}
 
		// método para eliminar un libro, recibe como parámetro el id del libro
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM clientes WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
 
		// método para buscar un libro, recibe como parámetro el id del libro
		public function obtenerCliente($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM clientes WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$cliente=$select->fetch();
			$myLibro= new Libro();
			$myLibro->setId($cliente['id']);
			$myLibro->setNombre($cliente['nombre']);
			$myLibro->setTelefono($cliente['telefono']);
			return $myLibro;
		}
 
		
	}
?>