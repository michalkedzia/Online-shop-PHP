<?php include("header.php");?>

<form class="form-horizontal row justify-content-center" action='' method="POST">
    <fieldset>
        <div id="legend">
            <legend class="">Rejestracja</legend>
        </div>
        <div class="control-group">
            <!-- Username -->
            <label class="control-label"  for="username">Login</label>
            <div class="controls">
                <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
            </div>
        </div>

        <div class="control-group">
            <!-- E-mail -->
            <label class="control-label" for="email">E-mail</label>
            <div class="controls">
                <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
            </div>
        </div>



        <div class="control-group">
            <!-- Password-->
            <label class="control-label" for="phone">Hasło</label>
            <div class="controls">
                <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
            </div>
        </div>





        <div class="control-group">
            <!-- E-mail -->
            <label class="control-label" for="phone">Numer telefonu</label>
            <div class="controls">
                <input type="text" id="phone" name="phone" placeholder="" class="input-xlarge">
            </div>
        </div>

        <div class="control-group">
            <!-- E-mail -->
            <label class="control-label" for="street">Ulica</label>
            <div class="controls">
                <input type="text" id="street" name="street" placeholder="" class="input-xlarge">
            </div>
        </div>

        <div class="control-group">
            <!-- E-mail -->
            <label class="control-label" for="town">Miasto</label>
            <div class="controls">
                <input type="text" id="town" name="town" placeholder="" class="input-xlarge">
            </div>
        </div>

        <div class="control-group">
            <!-- E-mail -->
            <label class="control-label" for="zipCode">Kod</label>
            <div class="controls">
                <input type="text" id="zipCode" name="zipCode" placeholder="" class="input-xlarge">
            </div>
        </div>



        <div class="control-group">
            <!-- Button -->
            <div class="controls">
                <button class="btn btn-success">Zarejestruj</button>
            </div>
        </div>
    </fieldset>
</form>

<?php include("footer.php");?>