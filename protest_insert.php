<?php
$organizator =$_REQUEST['organizator'];
$drzava=$_REQUEST['drzava'];
$grad=$_REQUEST['grad'];
$datum = $_REQUEST['datum'];
$broj=$_REQUEST['broj'];
$napomena=$_REQUEST['napomena'];

$query="INSERT INTO protest VALUES (NULL, (SELECT ID FROM grad WHERE Naziv='".$grad."'), '".$organizator."', STR_TO_DATE('".$datum."', '%Y-%m-%d'), ".$broj.", '".$napomena."');";

include "./connection.php";

$connection->query($query);
setcookie('notice', "Unos je uspješno dodat.",  time()+10000);

header("Location: ./index.php");