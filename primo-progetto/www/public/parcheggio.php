<h1>Prenotazione parcheggio</h1>

<?php
$veicolo = $_GET["veicolo"];

echo "Veicolo scelto: " . $veicolo;

?>
<p>>
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome">
</p>

<p>
    <label for="ore">Numero di ore:</label>
    <select id="ore" name="ore">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    </select>

<button type="submit">Calcola prezzo</button>
<?php
$nome = $_GET["nome"];
$ore = $_GET["ore"];
if (empty($nome) || empty($ore)) {
    echo "Compila tutti i campi richiesti";
}
?>