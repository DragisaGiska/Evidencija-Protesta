<form action="./protest_insert.php" method="post" onsubmit="return validate()">
    <div class="input-item">
        <label>Naziv:</label>
        <span><input type="text" name="organizator"><br></span>
    </div>
    <div class="input-item">
        <label>Država:</label>
        <select class="drzava-select" name="drzava">
            <?php
            include "./connection.php";
            $query_result=$connection->query("SELECT * FROM Drzava;");

            while($row=$query_result->fetch_array()){
                echo "<option class='drzava_item'>".$row['Naziv']."</option>";
            }
            ?>
        </select>
    </div>
    <div class="input-item">
        <label>Grad:</label>
        <select class="grad-select" name="grad">
            <?php
            include "./connection.php";
            $query_result=$connection->query("SELECT * FROM Grad WHERE Drzava_ID=1;");

            while($row=$query_result->fetch_array()){
                echo "<option>".$row['Naziv']."</option>";
            }
            ?>
            ?>
        </select>
    </div>
    <div class="input-item">
        <label>Datum:</label>
        <input type="date" name="datum">
    </div>
    <div class="input-item">
        <label>Broj učesnika:</label>
        <input type="text" name="broj">
    </div>
    <div class="input-item">
        <label>Napomena:</label>
        <textarea  cols="100" rows="5" name="napomena"></textarea>
    </div>
    <div class="input-item">
        <input type="submit" value="Potvrdi"><input type="button" value="Poništi" id="ponisti">
    </div>
</form>