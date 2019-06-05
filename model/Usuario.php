<?php
class Usuario extends EntidadBase{
    private $id;
    private $rut;
    private $pass;
    private $nombres;
    private $apellido_paterno;
    private $apellido_materno;
    private $telefono;
    private $correo;
    
    public function __construct($adapter) {
        $table="usuario";
        parent::__construct($table, $adapter);
    }	

	public function getId(){
		return $this->id;
	}

	public function getRut(){
		return $this->rut;
	}

	public function setRut($rut){
		$this->rut = $rut;
	}

	public function getPass(){
		return $this->pass;
	}

	public function getNombres(){
		return $this->nombres;
	}

	public function setNombres($nombres){
		$this->nombres = $nombres;
	}

	public function getApellido_paterno(){
		return $this->apellido_paterno;
	}

	public function setApellido_paterno($apellido_paterno){
		$this->apellido_paterno = $apellido_paterno;
	}

	public function getApellido_materno(){
		return $this->apellido_materno;
	}

	public function setApellido_materno($apellido_materno){
		$this->apellido_materno = $apellido_materno;
	}

	public function getTelefono(){
		return $this->telefono;
	}

	public function setTelefono($telefono){
		$this->telefono = $telefono;
	}

	public function getCorreo(){
		return $this->correo;
	}

	public function setCorreo($correo){
		$this->correo = $correo;
	}

    public function setByResult($result){
        $this->id = $result->id;
        $this->rut = $result->rut;
        $this->pass = $result->pass;
		$this->nombres = $result->nombres;
		$this->apellido_paterno = $result->apellido_paterno;
		$this->apellido_materno = $result->apellido_materno;
		$this->telefono = $result->telefono;
		$this->correo = $result->correo;
        return $this;
    }

	public function getFullName(){
		return $this->nombres." ".$this->apellido_paterno." ".$this->apellido_materno;
	}

    public function crear(){
        $query="INSERT INTO usuario (rut,pass,nombres,apellido_paterno,apellido_materno,telefono,correo)
                VALUES( '".$this->rut."',
                        '".$this->pass."',
						'".$this->nombres."',
						'".$this->apellido_paterno."',
						'".$this->apellido_materno."',
						'".$this->telefono."',
						'".$this->correo."');";
        $crear=$this->db()->query($query);
        //$this->db()->error;
        return $crear;
    }
	
}
?>