<!-- Jquery JS-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
<!-- Jquery JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>

<!-- bootstrap starts here -->
<script src="js/bootstrap.min.js"></script>
<!-- bootstrap ends here -->

<!-- slick slider cdn starts here -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<!-- slick slider cdn starts here -->
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<!-- Swiper JS -->
<!-- wow js starts here -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
<!-- wow js ends here -->
<script src="js/index.js"></script>
<script>
    // active class 
    const CurrentLocation = window.location.href;
    const menuItem = document.querySelectorAll('.exchange_dashboard .dashboard-sidebar ul li a');
    const menuLength = menuItem.length
    for (let i = 0; i < menuLength; i++) {
        if (menuItem[i].href === CurrentLocation) {
            // menuItem[i].className = "active";
            menuItem[i].classList.add('active');
        }
    }
    // active class 
    $(document).ready(function() {
        if ($("#sel-tab-wrapper .check-wrapper input").attr('checked', true)) {
            $('#sel-tab-wrapper .check-wrapper').addClass('active');
        } else {
            $('#sel-tab-wrapper .check-wrapper').removeClass('active');
        }

        $('.exchange-confrim .your-purchase-wrapper').hide();
        $('.confirm-content-wrapper .btn-wrapper a').click(function() {
            $('.exchange-confrim .your-purchase-wrapper').show();
            $('.confirm-content-wrapper').hide();
        });

        var swiper = new Swiper(".vision-slider", {
            effect: "cards",
            grabCursor: true,
        });
        $('.coin-row').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1
        });
        $('.mission-slider').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1
        });
    })
</script>