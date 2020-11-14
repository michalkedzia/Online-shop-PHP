<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <!--                <li class="nav-item">-->
                <!--                    <a class="nav-link" href="#'">My cart (0)</a>-->
                <!--                </li>-->
                <li class="nav-item">
                    <a class="nav-link" href="index.php?logout='1'">Wyloguj</a>
                </li>

                <!--                <li class="nav-item">-->
                <!--                    <a class="nav-link" href="login.php" >Cart 0</a>-->
                <!--                </li>-->
            </ul>
            <div>
<!--                --><?php
//                    if(isset($_SESSION['cart'])){
//                        $count=count($_SESSION['cart']);
//                    }
//                ?>
                <a href="cart.php" class="brn btn-outline-success">My cart (0)</a>
            </div>
        </div>
    </div>
</nav>