<?php

echo "Hello, World!"; // Output
echo "<br>"; // Necessario per andare a capo tra output.
echo "Buongiorno."; // echo "..." scrive gli output uno dopo l'altro.

echo "<br><br>============================ Variabili ============================<br><br>";

$var = 10; // Dichiaro una variabile e gli assegno un valore.
echo "Il valore della variabile è: " . $var; // Il valore si concatena tramite il punto -> (.)
echo "<br>";
var_dump($var);
echo "<br>";
$var2 = 2.50; // Il tipo di variabile è automaticamente deciso da PHP.
echo "Il valore della variabile è: " . $var2;
echo "<br>";
var_dump($var2);
echo "<br>";
$var2 = "Ciao"; // Una variabile può essere sovrascritta anche se di tipi diversi.
var_dump($var2);

echo "<br><br>============================ Valori Matematici e Limiti ============================<br><br>";

echo M_PI;
echo "<br>";
echo PHP_INT_MAX;
echo "<br>";
echo PHP_INT_MIN;
echo "<br>";
if ($var2 > 5)
    echo "Controllo Effettuato su var2";
else echo "Ciao, 2...";

echo "<br><br>============================ Vettori ============================<br><br>";

$vett = [];
$vett1 = [10, 20, 30];
echo "Visualizzo primo elemento del vettore<br>";
echo $vett1[0];
echo "<br>Conteggio elementi<br>";
$n = count($vett1);
echo "$n";
echo "<br>Stampa Elementi<br>";
for ($i = 0; $i < $n; $i++)
{
    echo "$vett1[$i]";
    echo "<br>";
}
echo "Var_dump dell'Array";
echo "<br>";
var_dump($vett1);
echo "<br>";
$vett2 = [10, 20, 30, "a", "b"];
var_dump($vett2);
echo "<br>";
array_push($vett2, 40, 50);
var_dump($vett2);

echo "<br><br>============================ Struct ============================<br><br>";

$studente = [
    "nome" => "Marco",
    "cognome" => "Rossi",
    "eta" => 18
];
echo $studente["nome"];
echo "<br>";
echo $studente["cognome"];
echo "<br>";
foreach ($studente as $chiave => $value) {
    echo "$chiave: $value";
    echo "<br>";
}

echo "<br><br>============================ Vettore Associativo Annidato ============================<br><br>";

$studenti = [
    "studente1" => [
        "nome" => "Gigi",
        "voto" => 7
    ],

    "studente2" => [
        "nome" => "Gigi...2",
        "voto" => 7.2
    ]
];
echo $studenti["studente2"]["nome"];
echo "<br>";
echo $studenti["studente2"]["voto"];

$config = [
    "database" => "mio_db",
    "utente" => "admin",
    "password" => "12345"
];

echo "<br>";
if (array_key_exists("nome", $studente))
    echo ("Chiave trovata");
else
    echo ("I don't know.");
echo "<br>";
$chiavi = array_keys($studente);
var_dump($chiavi);
echo "<br>";
$valori = array_values($studente);
var_dump($valori);
echo "<br>";
echo "$valori[1]";
echo "<br>";
echo $studente["eta"];
echo "<br>";
echo next($studente);

echo "<br><br>============================ '==', '===' e vari controlli sulle Variabili ============================<br><br>";

$var1 = 5;
$var2 = "5";
echo "<br>";
if ($var1 == $var2)
{
    echo "Sono uguali.";
    echo "<br>";
    echo var_dump($var1);
    echo " == ";
    echo var_dump($var2);
}
echo "<br>";
if ($var1 === $var2)
{
    echo "Sono uguali.";
    echo "<br>";
    echo var_dump($var1);
    echo " == ";
}
else
{
    echo "Sono diversi.";
    echo "<br>";
    echo var_dump($var1);
    echo " != ";
}
echo var_dump($var2);
echo "<br>";
$var3 = "Ciao";
$var4 = 0;
if ($var4 == $var3)
    echo "Esiste";
else
    echo "Non Esiste";
echo "<br>";
isset($a);// Restituisce false se la variabile  è Null o non esiste
echo "Restituisce false se la variabile  è Null o non esiste";
echo "<br>";
if (isset($a))
    echo "Esiste";
else
    echo "Non Esiste";
$var5 = null;
is_null(null); //Sempre vero....ovviamente
echo "<br><br>====== is_null ====== <br>";
if (is_null($var5))
    echo "Var 5 è null";
else
    echo "Var 5 NON è null";
echo "<br><br>====== isset ====== <br>";
if (isset($var5))
    echo "Var 5 esiste";
else
    echo "Var 5 NON esiste";
echo "<br><br>====== empty ====== <br>";
if (empty($var5))
    echo "Var 5 è vuota";
else
    echo "Var 5 NON è vuota";

echo "<br><br>============================ Metodi Array associativi ============================";

echo "<br><br>array_keys, rilascia le chiavi dell'array <br>";
$arr = ['a' => 1, 'b' => 2];
var_dump(array_keys($arr)); // ['a', 'b']
echo "<br><br>array_values, rilascia i valori dell'array <br>";
var_dump(array_values($arr)); // [1, 2]
echo "<br><br>array_key_exists, dichiara se la chiave specificata esiste nell'array <br>";
var_dump(array_key_exists('a', $arr)); // true
echo "<br><br>";
var_dump(isset($arr['a'])); // true
echo "<br><br>";
var_dump(in_array(1, $arr)); // true
echo "<br><br>";
var_dump(array_search(2, $arr)); // 'b'
echo "<br><br>";
unset($arr['a']); // removes key 'a'
var_dump($arr);
echo "<br><br>";
var_dump(array_merge([1, 2], [3, 4])); // [1, 2, 3, 4]
echo "<br><br>";
var_dump(array_slice([1, 2, 3, 4], 1, 2)); // [2, 3]
echo "<br><br>";
var_dump(array_splice($arr, 1, 1, ['x'])); // removes 1 element at index 1, inserts 'x'
echo "<br><br>";

$numeri = [1,2,3,4,5,6,7,8,9,10];
// array_map -> Applica una funzione a ogni elemento dell'array
$risultato = array_map(function($n){
    return $n * 2;
}, $numeri);

var_dump($risultato);

$risultato2 = array_filter($numeri, function ($n) {
    return $n > 5;
});
echo "<br><br>Array filtrato per N > 5<br><br>";
var_dump($risultato2);
echo "<br><br>Array walk -> aggiungo 10 ad ogni valore <br><br>";
array_walk($numeri, function ($n) {
    $n = $n + 10;
    echo "$n<br><br>";
});

echo "============================ Operatori ============================";

$x = 7;
echo "<br><br>Operatore Ternario<br><br>";
$risultato = $x > 6 ? "ok" : "no ok";
echo $risultato;
echo "<br><br>Operatore Coalescing<br><br>";
$risultato = $x > 6 ? "ok" : "no ok";
echo $risultato;
echo "<br><br>Operatore Spaceship<br><br>";
$y = 4;
echo  $x<=>$y; // 1 se quello a sinistra e piu grande, -1 se quello a destra e piu grande, 0 se uguali.

echo "<br><br>============================ Datetime ============================";

$data = new DateTime();
echo "<br><br>Data di oggi: ".$data -> format("d/m/y");
echo "<br><br>Ora di oggi: ".$data -> format("H:i:s");
echo "<br><br>Data e Ora di oggi: ".$data -> format("d/m/y H:i:s");
$data -> modify("+2 days");
echo "<br><br>Data di oggi + 2 giorni: ".$data -> format("d/m/y");
$data -> modify("-10 days");
echo "<br><br>Data di oggi - 10 giorni: ".$data -> format("d/m/y");
echo "<br><br>Differenza tra 2 date in giorni<br><br>";
$d1 = new DateTime("2025/01/10");
$d2 = new DateTime("2023/01/15");
$diff = $d1 -> diff($d2);
echo "<br><br>Differenza tra 2 date in giorni<br><br>";
echo $diff -> days;
echo "<br><br>Differenza tra 2 date in mesi<br><br>";
echo $diff -> m;
echo "<br><br>Differenza tra 2 date in anni<br><br>";
echo $diff -> y;
echo "<br><br>Differenza totale tra le 2 date<br><br>";
echo "<br><br>Years-Months-Days<br><br>";
echo $diff -> format("%y - %m - %d");
$intervaltime = new DateInterval("P1Y3M4DT2H3M4S");
echo "<br><br>============================ Path ============================<br><br>";
echo getcwd();
echo "<br><br>";
echo DIRECTORY_SEPARATOR;
$path = getcwd();
echo "<br><br>";
echo is_file($path.DIRECTORY_SEPARATOR."index2.php") ? "true" : "false";
$item = scandir($path.DIRECTORY_SEPARATOR."index2.php");
echo "<br><br><h1>Files in my directory</h1><br><br>";
echo "<UL>";
foreach ($item as $item) {
    if ($item != "." && $item != "..")
        echo "<LI>" .$item. "</LI>";
}
echo "</UL>";

