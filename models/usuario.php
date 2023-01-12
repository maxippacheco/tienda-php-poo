<?php 


class Usuario {

	private $id;
	private $nombre;
	private $apellidos;
	private $email;
	private $password;
	private $rol;
	private $imagen;

	private $db;

	public function __construct() {
		$this->db = Database::connect();
	}
	


	/**
	 * Get the value of imagen
	 */ 
	public function getImagen()
	{
		return $this->imagen;
	}

	/**
	 * Set the value of imagen
	 *
	 * @return  self
	 */ 
	public function setImagen($imagen)
	{
		$this->imagen = $imagen;

		return $this;
	}

	/**
	 * Get the value of rol
	 */ 
	public function getRol()
	{
		return $this->rol;
	}

	/**
	 * Set the value of rol
	 *
	 * @return  self
	 */ 
	public function setRol($rol)
	{
		$this->rol = $rol;

		return $this;
	}

	/**
	 * Get the value of password
	 */ 
	public function getPassword()
	{
		return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);; 
	}

	/**
	 * Set the value of password
	 *
	 * @return  self
	 */ 
	public function setPassword($password)
	{
		$this->password = $password;

	 
	}

	/**
	 * Get the value of email
	 */ 
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * Set the value of email
	 *
	 * @return  self
	 */ 
	public function setEmail($email)
	{
		$this->email = $email;

		return $this->db->real_escape_string($this->email);

	}

	/**
	 * Get the value of apellidos
	 */ 
	public function getApellidos()
	{
		return $this->db->real_escape_string($this->apellidos);
	}

	/**
	 * Set the value of apellidos
	 *
	 * @return  self
	 */ 
	public function setApellidos($apellidos)
	{
		$this->apellidos = $apellidos;

		return $this;
	}

	/**
	 * Get the value of nombre
	 */ 
	public function getNombre()
	{
		return $this->nombre;
	}

	/**
	 * Set the value of nombre
	 *
	 * @return  self
	 */ 
	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
		return $this->db->real_escape_string($this->nombre);
	}

	public function save(){

		$sql = "INSERT INTO usuarios VALUES(NULL, '{$this->getNombre()}', '{$this->getApellidos()}', '{$this->getEmail()}', '{$this->getPassword()}', 'user', NULL)";
		$save = $this->db->query($sql);

		$result = false;

		if( $save )
		{
			$result = true;
		}

		return $result;
	}

	public function login(){
		$result = false;
		$email = $this->email;
		$password=$this->password;
		
		$sql = "SELECT * FROM usuarios WHERE email ='$email'";

		$login = $this->db->query($sql);

		if( $login && $login->num_rows == 1 ){
			$usuario = $login->fetch_object();

			// verificar pass
			// $verify = password_verify($password, $usuario->password );
			
			// if( $verify ){
				$result = $usuario;
			// }

		}
		
		return $result;
	}

}


?>