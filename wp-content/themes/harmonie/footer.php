<footer>
  <div class="main">

	    <nav class="footNav" role="navigation">
  <h2 class="hiddenTitle">Navigation footer</h2>
            <?php wp_nav_menu(array('menu' => 'main',
                                    'depth' => '1' )); ?>
    </nav> 
  </div>
</footer>
<?php
   /* Always have wp_footer() just before the closing </body>
    * tag of your theme, or you will break many plugins, which
    * generally use this hook to reference JavaScript files.
    */
    wp_footer();
?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-44042024-1', 'thomas-lissens.be');
  ga('send', 'pageview');
</script>
</body>
</html>