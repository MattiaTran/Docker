<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acquisto biglietti</title>
</head>
<body>
<h1>Acquista un biglietto</h1>
<form method="post">
    <p>
        <label for="nome">Nome: </label>
        <input type="text" id="nome" name="nome" required>
    </p>
    <p>
        <label for="zona">Zona: </label>
        <select id="zona" name="zona" required>
            <option value="-" selected>-</option>
            <option value="1">zona 1</option>
            <option value="2">zona 2</option>
            <option value="3">zona 3</option>
        </select>
    </p>
    <p>
        <label for="tipo">Tipo biglietto: </label>
        <select id="tipo" name="tipo" required>
            <option value="-" selected>-</option>
            <option value="corsa-singola">Corsa Singola</option>
            <option value="durata-oraria">Durata Oraria</option>
            <option value="giornaliero">Giornaliero</option>
        </select>
    </p>

    <p>
        <label for="qta">Quantità: </label>
        <select id="qta" name="qta" required>
            <option value="1" selected>1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    </p>

    <button type="submit">Acquista ora</button>
</form>
</body>
</html>