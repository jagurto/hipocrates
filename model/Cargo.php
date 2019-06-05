<?php
class Cargo extends EntidadBase{
    private $id;
    private $nombre;
    private $sueldo_base;
    private $usuario_id;
    
    public function __construct($adapter) {
        $table="cargo";
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

	public function getSueldo_base(){
		return $this->sueldo_base;
	}    

    public function setByResult($result){
        $this->id = $result->id;
        $this->nombre = $result->nombre;
        $this->sueldo_base = $result->sueldo_base;
		$this->usuario_id = $result->usuario_id;
        return $this;
    }

    public function crear(){
        $query="INSERT INTO cargo (nombre,sueldo_base,usuario_id)
                VALUES( '".$this->nombre."',
                        '".$this->sueldo_base."',
						'".$this->usuario_id."');";
        $crear=$this->db()->query($query);
        //$this->db()->error;
        return $crear;
    }
	
}
?>