<?php
header('Access-Control-Allow-Origin: http://www.juego-ninja.tk', false);
 
$link = mysql_connect('localhost', 'ucymxbzr_estefi', 'maimo!123')
    or die('No se pudo conectar: ' . mysql_error());
mysql_select_db('ucymxbzr_juego') or die('No se pudo seleccionar la base de datos');
 
$query="SELECT id_usuario,nombre_usuario FROM usuarios";
$result = mysql_query($query)
        or die("Ocurrio un error en la consulta SQL");
mysql_close();
echo '<option value="0">Seleccionar</option>';
while (($fila = mysql_fetch_array($result)) != NULL) {
    echo '<option value="'.$fila["id_usuario"].'">'.$fila["nombre_usuario"].'</option>';
}
// Liberar resultados
mysql_free_result($result);
 
// Cerrar la conexión
mysql_close($link);

?>
