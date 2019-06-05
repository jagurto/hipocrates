<?php
class Ficha extends EntidadBase{
    private $id;
    private $peso;
    private $estatura;
    private $diagnostico;
    private $tratamiento;
    private $observacion;
    private $usuario_id;
    
    public function __construct($adapter) {
        $table="ficha";
        parent::__construct($table, $adapter);
    }
    
	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getPeso(){
		return $this->peso;
	}

	public function setPeso($peso){
		$this->peso = $peso;
	}

	public function getEstatura(){
		return $this->estatura;
	}

	public function setEstatura($estatura){
		$this->estatura = $estatura;
	}

	public function getDiagnostico(){
		return $this->diagnostico;
	}

	public function setDiagnostico($diagnostico){
		$this->diagnostico = $diagnostico;
	}

	public function getTratamiento(){
		return $this->tratamiento;
	}

	public function setTratamiento($tratamiento){
		$this->tratamiento = $tratamiento;
	}

	public function getObservacion(){
		return $this->observacion;
	}

	public function setObservacion($observacion){
		$this->observacion = $observacion;
	}

	public function getUsuario_id(){
		return $this->usuario_id;
	}

	public function setUsuario_id($usuario_id){
		$this->usuario_id = $usuario_id;
	}    

    public function setByResult($result){
        $this->id = $result->id;
        $this->peso = $result->peso;
        $this->estatura = $result->estatura;
		$this->diagnostico = $result->diagnostico;
		$this->tratamiento = $result->tratamiento;
		$this->observacion = $result->observacion;
		$this->usuario_id = $result->usuario_id;
        return $this;
    }

    public function crear(){
        $query="INSERT INTO ficha (peso,estatura,diagnostico,tratamiento,observacion,usuario_id)
                VALUES( '".$this->peso."',
                        '".$this->estatura."',
						'".$this->diagnostico."',
						'".$this->tratamiento."',
						'".$this->observacion."',
						'".$this->usuario_id."');";
        $crear=$this->db()->query($query);
        //$this->db()->error;
        return $crear;
    }
	
}
?>