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
            <li>
                <a href="../item?id=<?= $key ?>">
                    <?= $transaction['date']?>
                    <!-- <?= $contact['nom'] ?>
                    <?= $contact['prenom'] ?>
                    <?= $contact['compte'] ?> -->
                    <?= $transaction['montant'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>