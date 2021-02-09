<footer class="site-footer contenedor">
<hr>
<div class="contenido-footer">
<?php 
  // porcion de codigo que se encarga deplasmar el menu 
        $args= array(
            'theme_location'=>'menu-principal',
            'container'=>'nav',
            'container_class'=>'menu-principal'
        );

        wp_nav_menu($args);
  ?>

<p class="copyright">todos los derechos reservados. <?php echo get_bloginfo('name'). ' '. date('Y');?></p>
</div>

</footer>

<?php wp_footer(); ?>
</body>
</html>