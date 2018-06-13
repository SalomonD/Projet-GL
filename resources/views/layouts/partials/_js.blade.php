<!-- js -->
<script type="text/javascript" src="{{'/assets/js/jquery-2.1.4.min.js'}}"></script>
<!--search-bar-->
<script src="{{'/assets/js/main.js'}}"></script>
<!--//search-bar-->
<!-- FlexSlider -->
<script defer src="{{'/assets/js/jquery.flexslider.js'}}"></script>
<script type="text/javascript">
    $(function(){
    });
    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
</script>
<!-- FlexSlider -->
<!-- clients-slider-script -->
<script src="{{'/assets/js/slideshow.min.js'}}"></script>
<script src="{{'/assets/js/launcher.js'}}"></script>
<!-- //clients-slider-script -->
<!-- /circle-->
<script type="text/javascript" src="{{'/assets/js/circles.js'}}"></script>
<script>
    var colors = [
        ['#ffffff', '#fd9426'], ['#ffffff', '#fc3158'],['#ffffff', '#53d769'], ['#ffffff', '#147efb']
    ];
    for (var i = 1; i <= 7; i++) {
        var child = document.getElementById('circles-' + i),
            percentage = 30 + (i * 10);

        Circles.create({
            id:         child.id,
            percentage: percentage,
            radius:     80,
            width:      10,
            number:   	percentage / 1,
            text:       '%',
            colors:     colors[i - 1]
        });
    }

</script>
<!-- //circle -->
<!-- for-Map -->
<script type="text/javascript">
    $(function() {

        var menu_ul = $('.faq > li > ul'),
            menu_a  = $('.faq > li > a');

        menu_ul.hide();

        menu_a.click(function(e) {
            e.preventDefault();
            if(!$(this).hasClass('active')) {
                menu_a.removeClass('active');
                menu_ul.filter(':visible').slideUp('normal');
                $(this).addClass('active').next().stop(true,true).slideDown('normal');
            } else {
                $(this).removeClass('active');
                $(this).next().stop(true,true).slideUp('normal');
            }
        });

    });
</script>
<!-- //for-Map -->
<script src="{{'/assets/js/jzBox.js'}}"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{'/assets/js/move-top.js'}}"></script>
<script type="text/javascript" src="{{'/assets/js/easing.js'}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- smooth scrolling -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */
        $().UItoTop({ easingType: 'easeOutQuart' });
    });
</script>
<!-- Animation-effect -->
<script src='{{'/assets/js/aos.js'}}'></script>
<script src="{{'/assets/js/aosindex.js'}}"></script>
<!-- //Animation-effect -->
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script type="text/javascript">
    var compte_a_rebours = document.getElementById("compte_a_rebours");
  </script>
  <script>
            $(document).ready(function(){
                $('#bouton').click(function(){
                    $("#souscription").modal();
                     var id = $(this).attr('id');
                     $("#montant").val(id);
                   return false;
                });
            });
</script>
<script src="{{'/assets/js/bootstrap.js'}}"></script>
<script src = "{{'/js/adherent.js'}}"></script>