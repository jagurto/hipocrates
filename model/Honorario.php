<?php
class Honorario extends EntidadBase{
    private $id;
    private $fecha;
    private $total;
	private $retenido;
	private $usuario_id;

    public function __construct($adapter) {
        $table="honorario";
        parent::__construct($table, $adapter);
    }	

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getFecha(){
		return $this->fecha;
	}

	public function setFecha($fecha){
		$this->fecha = $fecha;
	}

	public function getTotal(){
		return $this->total;
	}

	public function setTotal($total){
		$this->total = $total;
	}

	public function getRetenido(){
		return $this->retenido;
	}

	public function setRetenido($retenido){
		$this->retenido = $retenido;
	}

	public function getUsuario_id(){
		return $this->usuario_id;
	}

	public function setUsuario_id($usuario_id){
		$this->usuario_id = $usuario_id;
	}

    public function setByResult($result){
        $this->id = $result->id;
        $this->fecha = $result->fecha;
		$this->total = $result->total;
		$this->retenido = $result->retenido;
        $this->usuario_id = $result->usuario_id;
        return $this;
    }

    public function crear(){
        $query="INSERT INTO honorario (fecha,total,retenido,usuario_id)
                VALUES( '".$this->fecha."',
						'".$this->total."',
						'".$this->retenido."',
						'".$this->usuario_id."');";
        $crear=$this->db()->query($query);
        //$this->db()->error;
        return $crear;
    }
	
}
?>