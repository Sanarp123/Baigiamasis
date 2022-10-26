<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <title>Laboratorijos forma</title>
 
    </head>

<body>

    <div class="container">
        <h1>Tyrimo rezultatai</h1>
        <form method="post" action="" enctype="multipart/form-data">

            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="Sulinys" checked >
                <label for="Sulinys">Šulinys/Šaltinis</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="Grezinys" >
                <label for="Grezinys">Gręžinys</label>
            </div>

            <h5>Adresas</h5>
            <div class="form-group">
                <label for="Cl">Miestas</label>
                <input type="text" class="form-control" id="Chloridas" name="Chloridas">
            </div>
            <div class="form-group">
                <label for="Cl">Gatvė</label>
                <input type="text" class="form-control" id="Chloridas" name="Chloridas">
            </div>
            <div class="form-group">
                <label for="Cl">Namo numeris</label>
                <input type="number" class="form-control" id="NamNum" name="NamNum">
            </div>

            <!-- GREZINIAMS -->
            <div class="form-group d-none" id="greziniai">
                <label for="Gręžinio numeris">Gręžinio numeris</label>
                <input type="number" class="form-control" id="GrezNum" name="GrezNum">
            </div>

            <h4>Bendra cheminė sudėtis</h4>

            <div class="d-flex flex-row justify-content-around">
                <div class="d-flex flex-column">

                    <h5>Anijonai</h5>
                    <div class="form-group">
                        <label for="Cl">Chloridas</label>
                        <input type="number" class="form-control" id="Chloridas" name="Chloridas">
                    </div>
                    <div class="form-group">
                        <label for="Cl">Sulfatas</label>
                        <input type="number" class="form-control" id="Sulfatas" name="Sulfatas">
                    </div>
                    <div class="form-group">
                        <label for="Cl">Hidrokarbonatai</label>
                        <input type="number" class="form-control" id="Hidrokarbonatai" name="Hidrokarbonatai">
                    </div>
                    <div class="form-group">
                        <label for="Cl">Nitritai</label>
                        <input type="number" class="form-control" id="Nitritai" name="Nitritai">
                    </div>
                    <div class="form-group">
                        <label for="Cl">Nitratai</label>
                        <input type="number" class="form-control" id="Nitratai" name="Nitratai">
                    </div>
                </div>

                <div class="d-flex flex-column ">
                    <h5>Katijonai</h5>
                    <div class="form-group">
                        <label for="Cl">Natris</label>
                        <input type="number" class="form-control" id="Natris" name="Natris">
                    </div>
                    <div class="form-group">
                        <label for="Cl">Amonis</label>
                        <input type="number" class="form-control" id="Amonis" name="Amonis">
                    </div>
                    <div class="form-group">
                        <label for="Cl">Kalis</label>
                        <input type="number" class="form-control" id="Kalis" name="Kalis">
                    </div>
                    <div class="form-group">
                        <label for="Cl">Magnis</label>
                        <input type="number" class="form-control" id="Magnis" name="Magnis">
                    </div>
                    <div class="form-group">
                        <label for="Cl">Kalcis</label>
                        <input type="number" class="form-control" id="Kalcis" name="Kalcis">
                    </div>
                </div>
            </div>



            <div class="d-flex flex-row justify-content-around">

                <div class="d-flex flex-column">
                    <br>
                    <h5>Kitos analitės</h5>

                    <div class="form-group">
                        <label for="Cl">pH</label>
                        <input type="number" class="form-control" id="pH" name="pH">
                    </div>
                    <div class="form-group">
                        <label for="Cl">Permanganato indeksas</label>
                        <input type="number" class="form-control" id="Permanganatas" name="Permanganatas">
                    </div>
                    <div class="form-group">
                        <label for="Cl">Savitasis elektros laidis</label>
                        <input type="number" class="form-control" id="EC" name="EC">
                    </div>
                    <div class="form-group">
                        <label for="Cl">Bendrasis kietumas</label>
                        <input type="number" class="form-control" id="BK" name="BK">
                    </div>
                    <div class="form-group">
                        <label for="Cl">Sausa liekana</label>
                        <input type="number" class="form-control" id="SL" name="SL">
                    </div>
                </div>


                <!-- GREZINIAMS -->

                <div class="d-flex flex-column d-none" id="greziniai2">
                    <br>
                    <h5>Kitos analitės</h5>

                    <div class="form-group">
                        <label for="Fe">Geležis</label>
                        <input type="number" class="form-control" id="gelezis" name="gelezis">
                    </div>
                    <div class="form-group">
                        <label for="Ar">Arsenas</label>
                        <input type="number" class="form-control" id="Arsenas" name="Arsenas">
                    </div>
                    <div class="form-group">
                        <label for="Mn">Manganas</label>
                        <input type="number" class="form-control" id="Manganas" name="Manganas">
                    </div>
                    <div class="form-group">
                        <label for="Fl">Fluoridai</label>
                        <input type="number" class="form-control" id="Fluoridai" name="Fluoridai">
                    </div>
                    <div class="form-group">
                        <label for="Br">Boras</label>
                        <input type="number" class="form-control" id="Boras" name="Boras">
                    </div>

                </div>
            </div>
            <br>
            <div class="d-flex flex-row justify-content-end">
                <button type="submit" class="btn btn-primary" name="submitResults">Pateikti</button>
            </div>


        </form>
        <br>
    </div>

    <script src="form_script.js"></script>


</body>

</html>