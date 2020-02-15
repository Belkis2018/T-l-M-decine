<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_database = "simplechat";

    /* Database config */
    $link = mysql_connect($db_host,$db_user,$db_pass) or die('No se ha podido realizar la conexión');

    mysql_select_db($db_database,$link);
    mysql_query("SET names UTF8");
    
    if (preg_match("/^[0-9]+$/",$_GET["id"])) {
        $sql = 'select * from message where id > ' .$_GET['id']. ' order by msgdate desc limit 1,10';        
    } else {
        $sql = 'select * from message order by msgdate desc limit 1,10';
    }
    
    $response = '[';
    $messages = mysql_query($sql);
    while ($msg = mysql_fetch_assoc($messages)) {
        $response .= '{ "id": "'.$msg['id'].'", "who":"'.$msg['who'].'"';
        $response .= ', "message": "'.$msg['message'].'", "msgdate":"'.$msg['msgdate'].'"';
        $response .= '},'; 
    }
    $response = rtrim($response,",");
    $response .= ']';
    
    echo $response;
