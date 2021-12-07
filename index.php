<!DOCTYPE>
<html>
<head>
    <title>Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <h2>Connexion</h2>
</body>
</html>
<?php
//   echo md5("titi");
echo md5('147');
?>

<form method="POST" action="trait.php" class="row g-3">
    <fieldset>
        <div class="row g-3 align-items-center">
            <div class="mb-3">
                <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo ou email" class="form-control">
            </div>
            <div class="mb-3">
                <input type="password" name="pwd" id="pwd" placeholder="Password" class="form-control">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
        </div>
    </fieldset>
</form>
<?
//=md5('1234');
