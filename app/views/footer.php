<!-- FOOTER -->
<footer class="container">
    <hr class="featurette-divider">
    <p class="pull-right"><a href="#">Back to top</a></p>
    <p>&copy; 2012 Thor Instruments, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer>



<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap-transition.js"></script>
<script src="../js/bootstrap-alert.js"></script>
<script src="../js/bootstrap-modal.js"></script>
<script src="../js/bootstrap-dropdown.js"></script>
<script src="../js/bootstrap-scrollspy.js"></script>
<script src="../js/bootstrap-tab.js"></script>
<script src="../js/bootstrap-tooltip.js"></script>
<script src="../js/bootstrap-popover.js"></script>
<script src="../js/bootstrap-button.js"></script>
<script src="../js/bootstrap-collapse.js"></script>
<script src="../js/bootstrap-carousel.js"></script>
<script src="../js/bootstrap-typeahead.js"></script>
<script>
    !function ($) {
        $(function(){
            // carousel demo
            $('#myCarousel').carousel()
        })
    }(window.jQuery)
</script>
<script type="text/javascript">
    $(window).scroll(function(){
        if ($(window).scrollTop() > 320){
            $('#aboutNav').addClass('fixed').css('top','0').next().css('padding-top','60px');
            $('#toTop').css('visibility', 'visible');
        } else {
            $('#aboutNav').removeClass('fixed').next().css('padding-top','0');
            $('#toTop').css('visibility', 'hidden');
        }
    });
</script>
</body>
</html>