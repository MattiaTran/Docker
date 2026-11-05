<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Biglietti Stampabili</title>
</head>
<body>

<h1>Riepilogo e Biglietti</h1>
<p>Prezzo Totale: <?=$costo_totale?> €</p>
<hr>

<?php foreach ($biglietti as $b): ?>
<div style="border: 1px dashed black; margin-bottom: 20px; padding: 10px;">
    <h3>[LOGO AZIENDA TRASPORTI]</h3>
    <p>Nome Acquirente: <?=$b['nome']?></p>
    <p>Zona: <?=$b['zona']?></p>
    <p>Tipo Biglietto: <?=$b['tipo']?></p>
    <p>Data e Ora: <?=$b['data_ora']?></p>
    <p>Costo: <?=$b['costo']?> €</p>
    <p>Codice Univoco: <strong><?=$b['codice']?></strong></p>
</div>
<hr>
<?php endforeach; ?>

<button onclick="window.print()">Stampa i biglietti</button>

</body>
</html>