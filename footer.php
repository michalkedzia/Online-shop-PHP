<!-- Footer -->

<!--<footer class="py-2 bg-dark fixed-bottom">-->
<!--    <div class="container">-->
<!--        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>-->
<!--    </div>-->
<!--    <!-- /.container -->-->
<!--</footer>-->

<!-- Bootstrap core JavaScript -->
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

<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>-->
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>-->




</body>
</html>