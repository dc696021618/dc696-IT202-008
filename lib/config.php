<?php
$ini = @parse_ini_file(__DIR__ . "/../.env");
if($ini && isset($ini["DB_URL"])){
    $url = $ini["DB_URL"];
    $db_url = parse_url($url);
}
else{
    //local Mac setup
    $dbhost = "127.0.0.1";
    $dbuser = "root";
    $dbpass = "";
    $dbdatabase = "test";
    $db_url = [
        "host" => $dbhost,
        "user" => $dbuser,
        "pass" => $dbpass,
        "path" => "/" . $dbdatabase
    ];
}
if(!$db_url || count($db_url) === 0){
    error_log("Failed to load environment variables.");
    throw new Exception("Config parsing error");
}
else{
    $dbhost = $db_url["host"];
    $dbuser = $db_url["user"];
    $dbpass = $db_url["pass"];
    $dbdatabase = substr($db_url["path"],1);
}
?>
