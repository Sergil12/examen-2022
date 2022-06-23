<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaires</title>
</head>
<body>
<form action="" enctype="multipart/form-data" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <br>
        <p>Crée une nouvelle transaction</p>
        <div>
            <label>
               destinataires 
            </label>
            <select name="destinataires">
                <option value="">--choisir un destinataires--</option>
                <option value="1">David Gilson</option>
                <option value="2">Jonathan Arabia</option>
                <option value="3">Ralu Renaud</option>
                <option value="4">Clotilde Connault</option>
            </select>
        </div>
        <br>
        <div>
            <label>
                Montant
            </label>
            <input name="montant" placeholder="1.0" step="0.01" min="0">
        </div>
        <br>
        <div>
            <label>
               Date 
            </label>
            <input name="date" value="2022-06-23" />
        </div>
        <br>
        <div>
            <input type="submit" value="Envoyer"> 
        </div>
        <input type="hidden" id="postId" name="postId" value="34657">
        
        

</form>
</body>
</html>