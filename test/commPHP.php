<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_database = "simplechat";

    /* Database config */
    $link = mysql_connect($db_host,$db_user,$db_pass) or die('No se ha podido realizar la conexión');

    mysql_select_db($db_database,$link);
    mysql_query("SET names UTF8");

    // Check wether chat button was pressed and content was sent
    if (count($_POST) > 0 && $_POST["msg"] != "" && $_POST["who"]!="") {
        // clean tags and code injection
        $message = htmlentities($_POST["msg"]);
        $who = htmlentities($_POST["who"]);
        $ip = $_SERVER["REMOTE_ADDR"];
        
        mysql_query("insert into message (who, message, ip) values ('".$who."','".$message."','".$ip."')");
    }
    
    $messages = mysql_query('select * from message order by msgdate desc');
    $total = mysql_num_rows($messages);
?>