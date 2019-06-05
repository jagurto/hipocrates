<?php
class Prevision extends EntidadBase{
    private $id;
    private $nombre;
    private $usuario_id;

    public function __construct($adapter) {
        $table="prevision";
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

	public function getUsuario_id(){
		return $this->usuario_id;
	}

	public function setUsuario_id($usuario_id){
		$this->usuario_id = $usuario_id;
	}

    public function setByResult($result){
        $this->id = $result->id;
        $this->nombre = $result->nombre;
        $this->usuario_id = $result->usuario_id;
        return $this;
    }

    public function crear(){
        $query="INSERT INTO prevision (nombre,usuario_id)
                VALUES( '".$this->nombre."',
						'".$this->usuario_id."');";
        $crear=$this->db()->query($query);
        //$this->db()->error;
        return $crear;
    }
	
}
?>