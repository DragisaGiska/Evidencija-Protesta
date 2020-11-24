<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./CSS/table.css">
    <title>Svi protesti</title>
</head>

<body>
<div class="table-container">
    <table>
        <thead>
        <th>Mjesto</th>
        <th>Organizator</th>
        <th>Datum</th>
        <th>Broj ucesnika</th>
        </thead>
        <tbody>
        <?php
        include "./connection.php";

        $query = "select CONCAT(CONCAT(g.Naziv, ', '), d.Naziv) as 'Mjesto', p.Naziv_Organizatora as 'Organizator', p.Datum, p.Broj_Ucesnika as 'Broj ucesnika' from protest p join grad g on p.Gra_ID=g.ID join drzava d on g.Drzava_ID=d.ID";
        $query_result = $connection->query($query);
        while($row=$query_result->fetch_array()){
            echo "<tr>";
            echo "<td>".$row[0]."</td>";
            echo "<td>".$row[1]."</td>";
            echo "<td>".$row[2]."</td>";
            echo "<td>".$row[3]."</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>
<a href="./index.php">Nazad</a>
</body>

</html>