<?php

require '../vendor/autoload.php';

use League\Plates\Engine;

$template = new Engine('../templates','tpl');

function generaCodice() {
    $codice = "";
    for ($i = 0; $i < 18; $i++) {
        $codice .= random_int(0, 9);
    }
    return $codice;
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST["nome"];
    $zona = $_POST["zona"];
    $tipo = $_POST["tipo"];
    $qta = intval($_POST["qta"]);

    $costo_per_zona = 0.0;
    if($zona == 1){
        $costo_per_zona = 1.4;
    } else if ($zona == 2){
        $costo_per_zona = 1.8;
    } else if ($zona == 3){
        $costo_per_zona = 2.2;
    }

    if ($tipo == "durata-oraria"){
        $costo_per_zona *= 1.5;
    } else if ($tipo == "giornaliero"){
        $costo_per_zona *= 2;
    }

    $costo_unitario = $costo_per_zona;
    $costo_totale = $costo_unitario * $qta;
    $data_ora = date('Y-m-d H:i:s');

    $biglietti = [];
    for ($i = 0; $i < $qta; $i++) {
        $biglietti[] = [
            'nome' => $nome,
            'zona' => $zona,
            'tipo' => $tipo,
            'costo' => $costo_unitario,
            'data_ora' => $data_ora,
            'codice' => generaCodice()
        ];
    }

    echo $template->render('StampaBiglietti', [
        'biglietti' => $biglietti,
        'costo_totale' => $costo_totale
    ]);

} else {
    echo $template->render('FormBiglietti', []);
}