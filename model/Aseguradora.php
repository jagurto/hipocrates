<?php
class Aseguradora extends EntidadBase{
    private $id;
    private $rut;
    private $nombre;
    private $direccion;
    private $telefono;
    
    public function __construct($adapter) {
        $table="aseguradora";
        parent::__construct($table, $adapter);
    }
    
    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getRut(){
		return $this->rut;
	}

	public function setRut($rut){
		$this->rut = $rut;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getDireccion(){
		return $this->direccion;
	}

	public function setDireccion($direccion){
		$this->direccion = $direccion;
	}

	public function getTelefono(){
		return $this->telefono;
	}

	public function setTelefono($telefono){
		$this->telefono = $telefono;
	}

    public function setByResult($result){
        $this->id = $result->id;
        $this->rut = $result->rut;
        $this->nombre = $result->nombre;
		$this->direccion = $result->direccion;
		$this->telefono = $result->telefono;
        return $this;
    }

    public function crear(){
        $query="INSERT INTO aseguradora (rut,nombre,direccion,telefono)
                VALUES( '".$this->rut."',
                        '".$this->nombre."',
						'".$this->direccion."',
						'".$this->telefono."');";
        $crear=$this->db()->query($query);
        //$this->db()->error;
        return $crear;
    }
	
}
?>