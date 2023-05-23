<?php 
if (isset($_POST['peso']) and isset($_POST['altura'])) {
    $nombre=$_POST["nombre"];
    $peso=$_POST["peso"];
    $altura=$_POST["altura"];
    $imc=$peso/($altura*$altura);
if ($imc <= 18.5) {
    echo "Nombre:",$nombre,"\n","Su imc es de:",$imc,"\n","por lo cual su estado es Pesopluma";
}elseif ($imc >= 18.5 && $imc <= 25) {
    echo "Nombre:",$nombre,"\n","Su imc es de:", $imc,"\n","por lo cual su estado es Normal";
}elseif ($imc >= 25 && $imc <=30) {
    echo "Nombre:",$nombre,"\n","Su imc es de:", $imc,"\n","por lo cual su estado es Sobrepeso";
}elseif ($imc >= 30 && $imc <=35) {
    echo "Nombre:",$nombre,"\n","Su imc es de:", $imc,"\n","por lo cual su estado es Obesidad Grado 1";
}elseif ($imc >= 35 && $imc <=40) {
    echo "Nombre:",$nombre,"\n","Su imc es de:", $imc,"\n","por lo cual su estado es Obesidad Grado 2";
}elseif ($imc > 40) {
        echo "Nombre:",$nombre,"\n","Su imc es de:", $imc,"\n","por lo cual su estado es Obesidad Grado 3";
}else {
    echo "Nombre",$nombre,"\n","Gracias por participar";
}
}
?>