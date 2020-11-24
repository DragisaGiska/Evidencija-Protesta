<?php
include "./connection.php";

$query="SELECT Naziv from grad WHERE Drzava_ID=(SELECT ID FROM drzava WHERE Naziv='".$_REQUEST['drzava']."');";
$query_result=$connection->query($query);
while($row=$query_result->fetch_array()){
    echo "<option>".$row['Naziv']."</option>";
}