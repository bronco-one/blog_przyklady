<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
<link rel="stylesheet"
     href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
     integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
     crossorigin="anonymous">
</head>
<body>
<div class="col-sm-8">
                    <h2 class="h2 text-center">Formularz rejestracji</h2>
                    <form action="proces.php" method="post" onsubmit="return checked()" >
                        <!-- #2 -->
                        <div class="form-group row">
                            <label for="first_name" class="col-sm-4 col-form-label">Imie:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="first_name" name="first_name"
                                       placeholder="Imię" maxlength="30" required
                                       value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>" >
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="last_name" class="col-sm-4 col-form-label">Nazwisko:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="last_name" name="last_name"
                                       placeholder="Nazwisko" maxlength="40" required
                                       value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label">E-mail:</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="email" name="email"
                                       placeholder="E-mail" maxlength="60" required
                                       value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password1" class="col-sm-4 col-form-label">Hasło:</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="password1" name="password1"
                                       placeholder="Hasło" minlength="8" maxlength="12"
                                       required value="<?php if (isset($_POST['password1'])) echo $_POST['password1']; ?>">
                                <span id='message'>Od 8 do 12 znaków.</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password2" class="col-sm-4 col-form-label">Powtórz hasło:</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="password2" name="password2"
                                       placeholder="Powtórz hasło" minlength="8" maxlength="12" required
                                       value="<?php if (isset($_POST['password2'])) echo $_POST['password2']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input id="submit" class="btn btn-primary" type="submit" name="submit"
                                       value="Register">
                            </div>

                        </div>
                    </form>
                </div>
</body>
</html>