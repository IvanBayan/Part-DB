<?php
        
    /* Enter your MySQL username and password in config.php */
    $mysql_server  = "localhost";
    $db_user       = "part-db";
    $db_password   = "PARTdb";

    /* this is the name of the mysql database */
    $database      = "part-db";


    /* choose your currency */
    $currency      = "&euro;";


    /* set your own title here, and prevent it from updates */
    $title         = "PART-DB Elektronische Bauteile-Datenbank"; 
    $startup_title = "Part-DB V0.2.1";


    /* disable the update list on the startup page */
    $disable_update_list = false;

    /* disable devices function, in case you don't need it */
    $disable_devices = false;

    /* disable help (it's not useful for multiuser environments */
    $disable_help = false;


    /* default for common datasheet path */
    $use_datasheet_path = false;

    /* common (e.g. on server) datasheet path */
    $datasheet_path = "file:///C:/datasheets/";

?>
