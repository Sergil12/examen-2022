<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste transactions</title>
</head>
<body>
    <ul>
        <?php foreach($transactions as $key => $transaction): ?>
             <?php $id = $transaction['emetteur'];
              $contact = getContactById($id);?>
        <!-- <?php $contacts = [
        $id => getContactById($_POST['emetteur']),
        $id => getContactById($_POST['destinataires']), ];?> -->
            <li>
                    <?= $transaction['date']?>
                    <?= $contact['nom'] ?>
                    <?= $contact['prenom'] ?>
                    <?= $contact['compte'] ?>
                    <?= $transaction['montant'] ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <br>
    <a href="../new">Crée une transactions </a>
</body>
</html>