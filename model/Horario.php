<?php
class Horario extends EntidadBase{
    private $id;
    private $hora_inicio;
    private $hora_fin;
    private $dia_semana;
    private $usuario_id;
    
    public function __construct($adapter) {
        $table="horario";
        parent::__construct($table, $adapter);
	}
	
	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getHora_inicio(){
		return $this->hora_inicio;
	}

	public function setHora_inicio($hora_inicio){
		$this->hora_inicio = $hora_inicio;
	}

	public function getHora_fin(){
		return $this->hora_fin;
	}

	public function setHora_fin($hora_fin){
		$this->hora_fin = $hora_fin;
	}

	public function getDia_semana(){
		return $this->dia_semana;
	}

	public function setDia_semana($dia_semana){
		$this->dia_semana = $dia_semana;
	}

	public function getUsuario_id(){
		return $this->usuario_id;
	}

	public function setUsuario_id($usuario_id){
		$this->usuario_id = $usuario_id;
	}

    public function setByResult($result){
        $this->id = $result->id;
        $this->hora_inicio = $result->hora_inicio;
        $this->hora_fin = $result->hora_fin;
		$this->dia_semana = $result->dia_semana;
		$this->usuario_id = $result->usuario_id;
        return $this;
    }

    public function crear(){
        $query="INSERT INTO horario (hora_inicio,hora_fin,dia_semana,usuario_id)
                VALUES( '".$this->hora_inicio."',
                        '".$this->hora_fin."',
						'".$this->dia_semana."',
						'".$this->usuario_id."');";
        $crear=$this->db()->query($query);
        //$this->db()->error;
        return $crear;
    }
	
}
?>