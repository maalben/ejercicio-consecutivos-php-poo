<?php 

if(isset($_POST["btncalcular"])){

    require_once 'Secuencia.php';

    $secuencia = new Secuencia();

    $numero = $_POST["txtnumero"];

    $secuencia->setNumero($numero);

    $secuencia->listarNumeros();

    echo "<br>". $secuencia->sumaConsecutivos();

}else{
    echo "No hackear por favor.";
}


?>