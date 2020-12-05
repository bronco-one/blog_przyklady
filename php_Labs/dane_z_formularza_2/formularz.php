<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <style type="text/css">
        #RegisterSection {
            background-color: #231d16;
            color: #d4b793;
            margin-top: 2rem;
            margin-bottom: 2rem;
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        .btn-color {
            background-color: #d4b793;
        }

        .h_padding {
            padding-bottom: 10px;
        }
    </style>
</head>

<body>

    <div class="container-fluid col-12" id="RegisterSection">
        <div>
            <h1 class="h1 h_padding text-center">Formularz rejestracji</h1>
        </div>
        <div class="col-10 ">

            <form action="proces.php" method="post" onsubmit="return checked()">

                <div class="form-group row">
                    <label for="name" class="col-sm-4 col-form-label">Imie:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Imię" maxlength="30" required value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="surname" class="col-sm-4 col-form-label">Nazwisko:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="surname" name="surname" placeholder="Nazwisko" maxlength="40" required value="<?php if (isset($_POST['surname'])) echo $_POST['surname']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label">E-mail:</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" maxlength="60" required value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-sm-4 col-form-label">Telefon:</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="00 000 000 000 lub 000 000 000" maxlength="14" value="<?php if (isset($_POST['phone'])) echo $_POST['phone']; ?>">
                        <span id='message1'>Opcionalnie.</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password1" class="col-sm-4 col-form-label">Hasło:</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="password1" name="password1" placeholder="Hasło" minlength="8" maxlength="12" required value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>">
                        <span id='message2'>Od 8 do 12 znaków.</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password2" class="col-sm-4 col-form-label">Powtórz hasło:</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="password2" name="password2" placeholder="Powtórz hasło" minlength="8" maxlength="12" required value="<?php if (isset($_POST['password2'])) echo $_POST['password2']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <input id="submit" class="btn btn-color" type="submit" name="submit" value="Zarejestruj">
                    </div>

                </div>
            </form>
        </div>
    </div>
</body>

</html>