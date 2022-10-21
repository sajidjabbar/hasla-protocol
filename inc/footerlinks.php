<!-- Jquery JS-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
<!-- Jquery JS -->
<!-- bootstrap starts here -->
<script src="js/bootstrap.min.js"></script>
<!-- bootstrap ends here -->
<!-- slick slider cdn starts here -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- slick slider cdn starts here -->
<script>
    $(document).ready(function() {
        $(window).on('load', function() {
            $("#preloader").fadeOut(1000);
        });
        $('.coin-row').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1
        });
    })
</script>