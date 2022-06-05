<style>
    td{
        border:solid 1px black;
        width:100px;
        padding:5px;
        background-color:white;
    }
</style>

<?php
include("libmysql.php");
//Get All Array
getdata("Barang");
//Get One Value By Key
getdataByKey("Barang","Nama");
//Insert Data
$Y=Array("ID","Nama","Barang","Tema");
$S=Array("2","6","7","8");
insertdata("Barang",implode(",",$Y),implode(",",$S));
//Update Data
updatedata("Barang","Nama","1");
//Delete Data
deletedata("Barang","Some Spesifik Id","128);
//Make A Table 
echo "<table>";
echo "<tr>";
getdatabykeyedit("<td>","Barang","Nama","</td>");
echo "</tr>";
echo "<tr>";
getdatabykeyedit("<td>","Barang","ID","</td>");
echo "</tr>";
echo "<tr>";
getdatabykeyedit("<td>","Barang","Tema","</td>");
echo "</tr>";
echo "<tr>";
getdatabykeyedit("<td>","Barang","Barang","</td>");
echo "</tr>";
echo "</table>";
?>
