<?php 
class Secuencia{

    private $numero;

    public function __construct(){
        $this->numero = 0;
    }

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($valor){
        $this->numero = $valor;
    }

    public function listarNumeros(){
        for($i=1; $i<= $this->getNumero(); $i++){
            echo $i . " ";
        }
    }

    public function sumaConsecutivos(){
        $suma = 0;
        for($i=1; $i<= $this->getNumero(); $i++){
            $suma = $suma + $i;
        }
        return $suma;
    }

}
?>