<?php include("header.php"); ?>
<?php include('RegisterHandler.php'); ?>

    <div class="panel-heading row justify-content-center">
        <h3 class="panel-title">Rejestracja</h3>
    </div>

    <div class=" row justify-content-center">

        <div class="panel-body">
            <form method="post" action='register.php'>
                <?php include('errors.php'); ?>
                <?php include('success.php'); ?>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="first_name" id="first_name" class="form-control input-sm"
                                   placeholder="Imie">
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="last_name" id="last_name" class="form-control input-sm"
                                   placeholder="Nazwisko">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email">
                </div>

                <div class="form-group">
                    <input type="text" name="username" id="username" class="form-control input-sm" placeholder="Login">
                </div>

                <div class="form-group">
                    <input type="tel" name="phone_number" id="phone_number" class="form-control input-sm"
                           placeholder="Numer telefonu">
                </div>


                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="zip_code" id="zip_code" class="form-control input-sm"
                                   placeholder="Kod pocztowy">
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="town" id="town" class="form-control input-sm" placeholder="Miasto">
                        </div>
                    </div>
                </div>

                <div class="form-group ">
                    <input type="text" name="street" id="street" class="form-control input-sm" placeholder="Ulica">
                </div>


                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control input-sm"
                                   placeholder="Hasło">
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                   class="form-control input-sm" placeholder="Powtórz hasło">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <input type="submit" name="register" id="register" value="Rejestracja"
                           class="btn btn-info btn-block">
                </div>

                <p class="row justify-content-center"><a href="login.php">Masz już konto ? Zaloguj się !</a></p>

            </form>
        </div>
    </div>

<?php include("footer.php"); ?>