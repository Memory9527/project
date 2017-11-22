<?php

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PWD','windows@123');
define('DB_NAME','forum');
define('APP_NAME',"Robin's Nest");

$connection = new mysqli(DB_HOST,DB_USER,DB_PWD,DB_NAME);
if ($connection->connect_error) die($connection->connect_error);

function createTable($name,$query){
    queryMysql("CREATE TABLE IF NOT EXISTS $name($query)");
    echo "Table '$name' created or already exists.<br>";
}

function queryMysql($query){
    global $connection;
    $result = $connection->query($query);
    return $result;

}

function sanitizeString($var){
    //过滤字符串
    global $connection;
    $var = strip_tags($var);
    $var = htmlentities($var);
    $var = stripslashes($var);
    return $connection->real_escape_string($var);
}

function showProfile($user){
    //显示用户简介
    if (file_exists("$user.jpg"))
        echo "<img src='$user.jpg' style='float:left'>";
    $result = queryMysql("SELECT * FROM profiles WHERE  user='$user'");

    if($result->num_rows){
        $row = $result->fetch_array(MYSQLI_ASSOC);
        echo stripslashes($row['text'])."<br style='clear:left;'><br>";


    }
}

?>





