  <footer>
  	<div class="footer-inner">
  		<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
      <a class="nav-logo" href="/"><?php bloginfo( 'name' ); ?></a>
      <?php bloginfo('description'); ?>
  	</div>
  </footer>

<?php wp_footer(); ?>
</body>
</html>
