<?php include ('header.php');?>


<!--<div class="container">-->
<!---->
<!--    <div class="col-lg-3">-->
<!--        <h1 class="my-4">Kategorie</h1>-->
<!--        <div id="filters" class="list-group">-->
<!---->
<!--            <a href="#"  data-filter=".raz" class="list-group-item">raz</a>-->
<!--            <a href="#"  data-filter=".dwa" class="list-group-item">dwa</a>-->
<!--            <a href="#"  data-filter=".trzy" class="list-group-item">trzy</a>-->
<!---->
<!--        </div>-->
<!--    </div>-->

>


<!--    <div class="col-lg-4 col-md-6 mb-4">-->
<!--        <div class="card h-100">-->
<!--            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>-->
<!--            <div class="card-body">-->
<!--                <h4 class="card-title">-->
<!--                    <a href="#">Item Two</a>-->
<!--                </h4>-->
<!--                <h5>$24.99</h5>-->
<!--                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet-->
<!--                    numquam aspernatur! Lorem ipsum dolor sit amet.</p>-->
<!--            </div>-->
<!--            <div class="card-footer">-->
<!--                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="col-lg-4 col-md-6 mb-4">-->
<!--        <div class="card h-100">-->
<!--            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>-->
<!--            <div class="card-body">-->
<!--                <h4 class="card-title">-->
<!--                    <a href="#">Item Three</a>-->
<!--                </h4>-->
<!--                <h5>$24.99</h5>-->
<!--                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet-->
<!--                    numquam aspernatur!</p>-->
<!--            </div>-->
<!--            <div class="card-footer">-->
<!--                <button class="btn btn-primary" type="submit">Kup</button>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->




<!--<div class="list-group">-->
<!--    --><?php //$result =$db->getData("category"); ?>
<!--    --><?php //foreach ($result as $category) { ?>
<!--        <a href="#" class="list-group-item">  --><?php //echo $category["categoryName"]; ?><!--  </a>-->
<!--    --><?php //} ?>
<!--</div>-->


<div class="container">
    <div class="filter">
        <div class="list-group">
<!--        <h1>Filtering</h1>-->
        <button  data-name='*' class="list-group-item">All</button>
        <button  data-name=".fruit" class="list-group-item">fruit</button>
        <button  data-name=".flower" class="list-group-item">flower</button>
        <button  data-name=".bird" class="list-group-item">bird</button>
        </div>
    </div>

    <div class="grid">
        <div class="col-lg-4 col-md-6 mb-4 grid-item flower">Rose</div>
        <div class="col-lg-4 col-md-6 mb-4 grid-item bird">Parrot</div>
        <div class="col-lg-4 col-md-6 mb-4 grid-item fruit">sad</div>
        <div class="col-lg-4 col-md-6 mb-4 grid-item flower">Tulip</div>
        <div class="col-lg-4 col-md-6 mb-4 grid-item bird">Sparrow</div>
        <div class="col-lg-4 col-md-6 mb-4 grid-item flower">Marigold</div>
        <div class="col-lg-4 col-md-6 mb-4 grid-item fruit">Orange</div>
        <div class="col-lg-4 col-md-6 mb-4 -item bird">Owl</div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/web-animations/2.3.1/web-animations.min.js"></script>
<script src="isotope.pkgd.min.js"></script>
<script>

    var $grid = $('.grid').isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows',
    });
    $('.filter button').on("click", function () {
        var value = $(this).attr('data-name');
        $grid.isotope({
            filter: value
        });
        $('.filter button').removeClass('active');
        $(this).addClass('active');
    })

</script>
</body>
</html>