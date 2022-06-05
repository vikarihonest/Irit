<?php
//Note This Made By Vikarihonest Okey

function mysql(){
$server = "localhost";
$name = "idname";//Username
$db="idb";//Dbname
$pw = "123";//Password
$condition = new mysqli($server, $name, $pw,$db);
return $condition;
}

function getdata($table){
$sql= "SELECT * FROM `$table`";
$result = mysqli_query(mysql(), $sql);
$row = $result->fetch_assoc();
return print_r($row);
}

function getdatabykey($table,$key){
$sql= "SELECT * FROM `$table`";
$result = mysqli_query(mysql(), $sql);
while($row = $result->fetch_assoc()) {
   echo $row[$key];
 
}
}

function getdatabykeyedit($left,$table,$key,$right){
$sql= "SELECT * FROM `$table`";
$result = mysqli_query(mysql(), $sql);

while($row = $result->fetch_assoc()) {
   echo "$left$row[$key]$right";
}
}


function updatedata($table,$key,$value){
$sql="UPDATE `$table` SET $key=$value WHERE 1";
mysqli_query(mysql(), $sql);
}

function insertdata($table,$key,$value){
$sql="INSERT INTO $table($key) VALUES ($value)";
mysqli_query(mysql(), $sql);
}

function deletedata($table,$key,$value){
$sql="DELETE FROM $table WHERE $key=$value";
mysqli_query(mysql(), $sql);
}

?>
