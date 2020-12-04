<?php include("header.php"); ?>
<?php include  ("AdminHandler.php");?>
    <div class="panel-heading row justify-content-center">
        <h3 class="panel-title">Panel administratora</h3>
    </div>

    <div class=" row justify-content-center">

        <div class="panel-body">
            <form method="post" action='admin.php'>
                <?php include('errors.php'); ?>
                <?php include('success.php'); ?>

                <div class="form-group">
                    <input type="text" name="username" id="username" class="form-control input-sm" placeholder="Login">
                </div>


                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-sm"
                           placeholder="Hasło">
                </div>

                <div class="row">
                    <input type="submit" name="login" id="login" value="Zaloguj" class="btn btn-info btn-block">
                </div>
            </form>
        </div>
    </div>

<?php include("footer.php"); ?>