<?php
    $arrayIds = [];

    if ($_POST["btnSubmit"]) {
        if ($checkboxChecked = filter_input(INPUT_POST, "ckUsuarios", FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY)) {
            foreach ($checkboxChecked as $ck) {
                $arrayIds[] = $ck;
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores de Checkboxes</title>
</head>
<body>
    <div style="padding: 10px; background-color: #EEE;">
        <form method="POST">
            <label>
                <input type="checkbox" name="ckUsuarios[]" value="1">
                João
            </label>
            <br>
            <label>
                <input type="checkbox" name="ckUsuarios[]" value="2">
                Maria
            </label>
            <br>            
            <label>
                <input type="checkbox" name="ckUsuarios[]" value="3">
                José
            </label>
            <br>    
            <label>
                <input type="checkbox" name="ckUsuarios[]" value="4">
                Edvaldo
            </label>
            <br>
            <label>
                <input type="checkbox" name="ckUsuarios[]" value="5">
                Severina
            </label>
            <br>
            <input type="submit" name="btnSubmit" value="Enviar" style="padding: 5px;">
        </form>
    </div>
    <br>
    <div style="padding: 10px; background-color: #EEE;">
        <?php
            for ($i=0; $i < count($arrayIds); $i++) { 
                echo "<p>Id selecionado: {$arrayIds[$i]}</p>";
            }
        ?>
        
    </div>
</body>
</html>