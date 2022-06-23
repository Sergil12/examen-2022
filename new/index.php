<?php

require('../liste_transactions.php');

$id = null;
$transaction = null;

if (isset($_GET['id'])) {
    $id = +$_GET['id'];

    if (isset($transactions[$id])) {
        $transaction = $transaction[$id];
    }
}
// define variables and set to empty values
$destinataires = $montant = $date = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $destinataires = test_input($_POST["destinataires"]);
  $montant = test_input($_POST["montant"]);
  $date = test_input($_POST["date"]);

  echo "ta transaction a bien été envoyer!";
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}




require('./view.php');
