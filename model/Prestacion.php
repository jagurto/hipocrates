<?php
class Prestacion extends EntidadBase{
    private $id;
    private $hora;
    private $descripcion;
    private $precio;
    private $usuario_id;
    private $profesional_id;
    
    public function __construct($adapter) {
        $table="prestacion";
        parent::__construct($table, $adapter);
    }	

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getHora(){
		return $this->hora;
	}

	public function setHora($hora){
		$this->hora = $hora;
	}

	public function getDescripcion(){
		return $this->descripcion;
	}

	public function setDescripcion($descripcion){
		$this->descripcion = $descripcion;
	}

	public function getPrecio(){
		return $this->precio;
	}

	public function setPrecio($precio){
		$this->precio = $precio;
	}

	public function getUsuario_id(){
		return $this->usuario_id;
	}

	public function setUsuario_id($usuario_id){
		$this->usuario_id = $usuario_id;
	}

	public function getProfesional_id(){
		return $this->profesional_id;
	}

	public function setProfesional_id($profesional_id){
		$this->profesional_id = $profesional_id;
	}    

    public function setByResult($result){
        $this->id = $result->id;
        $this->hora = $result->hora;
        $this->descripcion = $result->descripcion;
		$this->precio = $result->precio;
		$this->usuario_id = $result->usuario_id;
		$this->profesional_id = $result->profesional_id;
        return $this;
    }

    public function crear(){
        $query="INSERT INTO prestacion (hora,descripcion,precio,usuario_id,profesional_id)
                VALUES( '".$this->hora."',
                        '".$this->descripcion."',
						'".$this->precio."',
						'".$this->usuario_id."',
						'".$this->profesional_id."');";
        $crear=$this->db()->query($query);
        //$this->db()->error;
        return $crear;
    }
	
}
?>