<?php
class Seguro extends EntidadBase{
    private $id;
    private $nombre;
    private $descuento;
    private $vigencia;
    private $aseguradora_id;
    
    public function __construct($adapter) {
        $table="seguro";
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

	public function getDescuento(){
		return $this->descuento;
	}

	public function setDescuento($descuento){
		$this->descuento = $descuento;
	}

	public function getVigencia(){
		return $this->vigencia;
	}

	public function setVigencia($vigencia){
		$this->vigencia = $vigencia;
	}

	public function getAseguradora_id(){
		return $this->aseguradora_id;
	}

	public function setAseguradora_id($aseguradora_id){
		$this->aseguradora_id = $aseguradora_id;
	}    

    public function setByResult($result){
        $this->id = $result->id;
        $this->nombre = $result->nombre;
        $this->descuento = $result->descuento;
		$this->vigencia = $result->vigencia;
		$this->aseguradora_id = $result->aseguradora_id;
        return $this;
    }

    public function crear(){
        $query="INSERT INTO seguro (nombre,descuento,vigencia,aseguradora_id)
                VALUES( '".$this->nombre."',
                        '".$this->descuento."',
						'".$this->vigencia."',
						'".$this->aseguradora_id."');";
        $crear=$this->db()->query($query);
        //$this->db()->error;
        return $crear;
    }
	
}
?>