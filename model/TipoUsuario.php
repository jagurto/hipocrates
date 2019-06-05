<?php
class TipoUsuario extends EntidadBase{
    private $id;
    private $nombre;
    
    public function __construct($adapter) {
        $table="tipo_usuario";
        parent::__construct($table, $adapter);
    }	
    
	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
    public function setByResult($result){
        $this->id = $result->id;
        $this->nombre = $result->nombre;
        return $this;
    }

    public function crear(){
        $query="INSERT INTO tipo_usuario (nombre)
                VALUES( '".$this->nombre."');";
        $crear=$this->db()->query($query);
        //$this->db()->error;
        return $crear;
    }
	
}
?>