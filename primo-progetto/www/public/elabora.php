<?php
// Controlliamo se i dati sono stati inviati tramite POST
if (isset($_POST['cognome'])) {

    // 1. Recupero dei dati semplici
    $cognome = $_POST['cognome'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $corso = $_POST['corso'];
    $livello = $_POST['livello'];

    // 2. Controllo e recupero del campo di testo opzionale
    if (isset($_POST['richieste']) && $_POST['richieste'] != "") {
        $richieste = $_POST['richieste'];
    } else {
        $richieste = "nessuna";
    }

    // 3. Recupero delle checkbox (array di orari) usando un ciclo foreach base
    $orario_testo = "";
    if (isset($_POST['orario'])) {
        foreach ($_POST['orario'] as $singolo_orario) {
            $orario_testo = $orario_testo . $singolo_orario . "<br>";
        }
    } else {
        $orario_testo = "nessuna preferenza";
    }

} else {
    // Se la pagina viene aperta senza inviare il form, rimanda al form
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Riepilogo Richiesta</title>
</head>
<body>

<p>Gentile <?php echo $cognome; ?> <?php echo $nome; ?></p>

<p>Lei ha richiesto l'iscrizione al corso <?php echo $corso; ?> livello <?php echo $livello; ?> con orari:</p>

<p><?php echo $orario_testo; ?></p>

<p><strong>Altre richieste:</strong><br>
    <?php echo $richieste; ?></p>

<p>Stiamo verificando tutti i dati, le invieremo la risposta a <?php echo $email; ?></p>

</body>
</html>