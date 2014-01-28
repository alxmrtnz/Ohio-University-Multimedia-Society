<?php
/**
 * The template for displaying the footer.
 */
?>


        <!-- BEGIN Script Inclusions -->
        <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/scripts/jquery-1.10.2.min.js"></script>


        <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/scripts/jquery.classywiggle.js"></script>
        <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/scripts/main.js"></script>

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-45613058-1', 'ohioums.com');
          ga('send', 'pageview');

        </script>
        <!-- END Script Inclusions -->

<?php wp_footer(); ?>

</body>
</html>