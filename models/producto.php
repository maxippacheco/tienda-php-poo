<?php 

class Producto {

	private $id;
	private $categoria_id;
	private $nombre;
	private $descripcion;
	private $precio;
	private $stock;
	private $oferta;
	private $fecha;
	private $imagen;

	private $db;

	public function __construct() {
		$this->db = Database::connect();
	}

	public function getAll(){
		$productos = $this->db->query("SELECT * FROM productos ORDER BY id DESC");
		return $productos;
	}

}


?>