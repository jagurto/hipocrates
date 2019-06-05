<?php
class AdjuntoFicha extends EntidadBase{
    private $id;
    private $nombre_original;
    private $ruta;
    private $extension;
    private $ficha_id;
    
    public function __construct($adapter) {
        $table="adjunto_ficha";
        parent::__construct($table, $adapter);
    }	

    public function setByResult($result){
        $this->id = $result->id;
        $this->nombre_original = $result->nombre_original;
        $this->ruta = $result->ruta;
		$this->extension = $result->extension;
		$this->ficha_id = $result->ficha_id;
        return $this;
    }

    public function crear(){
        $query="INSERT INTO adjunto_ficha (nombre_original,ruta,extension,ficha_id)
                VALUES( '".$this->nombre_original."',
                        '".$this->ruta."',
						'".$this->extension."',
						'".$this->ficha_id."');";
        $crear=$this->db()->query($query);
        //$this->db()->error;
        return $crear;
    }
	
}
?>