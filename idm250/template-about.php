<?php
/*
Template Name: About
*/

?>
<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
<div class="container">
    <!-- start content -->
    <?php the_content(); ?>
    <!-- end content -->
  </div>
</div>
<?php endwhile; ?>

<?php get_footer(); ?>