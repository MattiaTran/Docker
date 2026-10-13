<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<h2>Prenota da MyPizza</h2>


<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <p>
        <label for="sistemazione">Tipo di sistemazione: </label><br>
        <select name="sistemazione" id="sistemazione">
            <option value="veranda">veranda</option>
            <option value="interno">interno</option>
            <option value="esterno">esterno</option>
        </select>
    </p>

    <p>
        <label for="pizza">Pizza: </label><br>
        <select name="pizza" id="pizza" required>
            <option value="margherita">margherita</option>
            <option value="marinara">prosciutto</option>
            <option value="wurstel">wurstel</option>
        </select>
    </p>

    <p>
        <label for="aggiunte">Seleziona le eventuali aggiunte: </label><br>
        <input type="checkbox" id="prosciutto" name="aggiunte[]" value="prosciutto">
        <label for="prosciutto"> prosciutto</label><br>
        <input type="checkbox" id="ricotta" name="aggiunte[]" value="ricotta">
        <label for="ricotta"> ricotta</label><br>
        <input type="checkbox" id="salsiccia" name="aggiunte[]" value="salsiccia">
        <label for="salsiccia"> salsiccia</label><br>
    </p>

    <p>
        <label for="impasto">Seleziona il tipo di impasto: </label><br>
        <input type="radio" id="senza_glutine" name="impasto" value="senza glutine">
        <label for="senza_glutine"> senza glutine</label><br>
        <input type="radio" id="normale" name="impasto" value="normale">
        <label for="normale"> normale</label><br>
    </p>

    <p>
        <input type="submit" value="Prenota">
    </p>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["sistemazione"]) || empty($_POST["pizza"]) || empty($_POST["impasto"])) {
        echo "<p>Inserisci tutti i dati</p>";
    } else {

        $sistemazione = $_POST["sistemazione"];
        $pizza = $_POST["pizza"];
        $impasto = $_POST["impasto"];

        if (isset($_POST["aggiunte"])) {
            $aggiunte = $_POST["aggiunte"];
            $testo_aggiunte = "e aggiunte di" . implode(", ", $aggiunte);
        } else {
            $aggiunte = [];
            $testo_aggiunte = "senza aggiunte";
        }

        echo "<p>la pizza $pizza con impasto $impasto $testo_aggiunte, e' stata correttamente prenotata con sistemazione $sistemazione</p>";
    }
}

?>

</body>
</html>
