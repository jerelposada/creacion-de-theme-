<?php
get_header();
?>

<main class="seccion pagina no-sidebars contenedor">

<?php $Author=get_queried_object();

 ?>
    <h2 class="text-center texto-primario">
        <?php echo $Author->data->display_name; ?>
    </h2>
    <p class="text-center">
        <?php echo get_the_author_meta('description',$Author->data->ID) ?>
    </p>
<ul class="listado-blog">
<?php
get_template_part('template-parts/loop','blog');
?>
</ul>
</main>
<?php
get_footer();
?>