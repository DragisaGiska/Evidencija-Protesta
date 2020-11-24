<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./CSS/main.css">
        <title>Evidencija Protesta</title>
    </head>
    <body>
    <?php
    if(isset($_COOKIE['notice'])){
        echo "<div class='notice'>".$_COOKIE['notice']."</div>";
        setcookie("notice", "", time()-1000);
    }
    ?>
        <div class="image-container">
            <img src="./images/background.png">
        </div>
        <div class="form-container">
            <h1>Evidencija protesta</h1>
            <div class="form-wrapper">
                <?php
                include "./form.php";
                ?>
            </div>
        </div>

    <a href="./tabela.php">Prikaži unose</a>

        <script src="JS/grad_ajax.js"></script>
        <script src="JS/form_controls.js"></script>
    </body>
</html>
