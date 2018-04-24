<?php

namespace Config;

# Definições de constantes:
define ('IP_CON'    , '127.0.0.1');
define ('LOG_CON'   , 'root');
define ('PASSW_CON' , '');
define ('DB_CON'    , 'db_teste');
define ('DOOR_CON'  , 3306);

class DataBase{
    //Você pode usar o pdf numa função estatica pra não precisar estanciar.
    public static function getConn(){
        return mysqli_connect(IP_CON, LOG_CON, PASSW_CON, DB_CON, DOOR_CON);
    }
}
?>