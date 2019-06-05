<?php
class Antecedente extends EntidadBase{
    private $id;
    private $tipo;
    private $descripcion;
    private $ficha_id;
    
    public function __construct($adapter) {
        $table="antecedente";
        parent::__construct($table, $adapter);
    }
    
    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getTipo(){
		return $this->tipo;
	}

	public function setTipo($tipo){
		$this->tipo = $tipo;
	}

	public function getDescripcion(){
		return $this->descripcion;
	}

	public function setDescripcion($descripcion){
		$this->descripcion = $descripcion;
	}

	public function getFicha_id(){
		return $this->ficha_id;
	}

	public function setFicha_id($ficha_id){
		$this->ficha_id = $ficha_id;
	}

    public function setByResult($result){
        $this->id = $result->id;
        $this->tipo = $result->tipo;
        $this->descripcion = $result->descripcion;
		$this->ficha_id = $result->ficha_id;
        return $this;
    }

    public function crear(){
        $query="INSERT INTO antecedente (tipo,descripcion,ficha_id)
                VALUES( '".$this->tipo."',
                        '".$this->descripcion."',
						'".$this->ficha_id."');";
        $crear=$this->db()->query($query);
        //$this->db()->error;
        return $crear;
    }
	
}
?>