<? php

    define('DB_HOST', 'Localhost');
    define('DB_NAME', 'final');
    define('DB_USER', 'root');
    define('DB_PASWORD', ' ');
    //cadenas de conexion

    $con=mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die ("conexion fallida: ".mysql.erro());
    $db=mysql_select_db(DB_NAME, $con) or die ("conexion fallida: ".mysql.erro());

?>