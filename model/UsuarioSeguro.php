<?php
class UsuarioSeguro extends EntidadBase{
    private $id;
    private $usuario_id;
    private $seguro_id;
    
    public function __construct($adapter) {
        $table="usuario_seguro";
        parent::__construct($table, $adapter);
    }	

    public function setByResult($result){
        $this->id = $result->id;
        $this->usuario_id = $result->usuario_id;
        $this->seguro_id = $result->seguro_id;
        return $this;
    }

    public function crear(){
        $query="INSERT INTO usuario_seguro (usuario_id,seguro_id)
                VALUES( '".$this->usuario_id."',
                        '".$this->seguro_id."');";
        $crear=$this->db()->query($query);
        //$this->db()->error;
        return $crear;
    }
	
}
?>