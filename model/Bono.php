<?php
class Bono extends EntidadBase{
    private $id;
    private $cantidad;
    private $prestacion_id;
    
    public function __construct($adapter) {
        $table="bono";
        parent::__construct($table, $adapter);
    }
    
	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getCantidad(){
		return $this->cantidad;
	}

	public function setCantidad($cantidad){
		$this->cantidad = $cantidad;
	}

	public function getPrestacion_id(){
		return $this->prestacion_id;
	}

	public function setPrestacion_id($prestacion_id){
		$this->prestacion_id = $prestacion_id;
	}    

    public function setByResult($result){
        $this->id = $result->id;
        $this->cantidad = $result->cantidad;
        $this->prestacion_id = $result->prestacion_id;
        return $this;
    }

    public function crear(){
        $query="INSERT INTO bono (cantidad,prestacion_id)
                VALUES( '".$this->cantidad."',
                        '".$this->prestacion_id."');";
        $crear=$this->db()->query($query);
        //$this->db()->error;
        return $crear;
    }
	
}
?>