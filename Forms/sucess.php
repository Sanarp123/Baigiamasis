<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duomenų pateikimas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">
<h1>Duomenys pateikti sėkmingai arba ne</h1>
<div class="d-flex flex-row justify-content-around" >
        <form method="post" action="lab_form.php">
            <button class="btn btn-primary" type="submit" name="Pateikimas">Duomenų pateikimas</button>
        </form>    
        <form method="post" action="../index.html">
            <button class="btn btn-primary" type="submit" name="Atsijungti">Atsijungti</button>
        </form> 
        </div>
    </div>

</body>
</html>