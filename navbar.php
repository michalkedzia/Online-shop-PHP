<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

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
                <?php if (!isset($_SESSION['iduser'])) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Zaloguj</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <?php
                        $count = 0;
                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $count = $count + $_SESSION['cart'][$key]['Quantity'];
                            }
                        }
                        ?>
                        <a href="cart.php" class="nav-link">Koszyk (<?php echo $count; ?>)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="history.php">Historia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?logout='1'">Wyloguj</a>
                    </li>

                <?php } ?>

            </ul>
        </div>

</nav>