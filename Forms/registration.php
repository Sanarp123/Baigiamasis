<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prisijungimas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">
<h1>Registracija</h1>
        <form method="post" action="lab_form.php">
            <input class="form-control" name="vardas" type="text" placeholder="Vardas">
            <input class="form-control" name="pavarde" type="text" placeholder="Pavardė">     
            <input class="form-control" name="email" type="email" placeholder="El. paštas">
            <input class="form-control" type="password" name="slaptazodis1" placeholder="Slaptažodis">
            <input class="form-control" type="password" name="slaptazodis2" placeholder="Slaptažodis">
            <input class="form-control" name="imone" type="text" placeholder="Įmonė">
            <button class="btn btn-primary" type="submit" name="registruotis">Registruotis</button>
        </form>    

    </div>

</body>
</html>