
<?php 
	class Categoria {
		private $id;
		private $nombre;

		private $db;
		/**
		 * Class constructor.
		 */
		public function __construct()
		{
			$this->db = Database::connect();
		}

		public function getNombre()
		{
			return $this->nombre;
		}

		public function setNombre($nombre)
		{
			$this->nombre = $this->db->real_escape_string($nombre);
		}


		public function getCategorias()
		{
			$categorias = $this->db->query("SELECT * FROM categorias ORDER BY id DESC;");
			return $categorias;
		}

		public function save()
		{
			$sql = "INSERT INTO categorias VALUES(NULL, '{$this->getNombre()}');";
			$save = $this->db->query($sql);

			$result = false;
			if( $save )
			{
				$result = true;
			}

			return $result;
		}
		
	}

?>