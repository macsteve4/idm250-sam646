<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

<div class="projectcont">
<div class="projects">
  <h1 class=""><?php the_title(); ?>
  </h1>

  <div class="">
    <!-- start content -->
    <?php the_content(); ?>
    <!-- end content -->
  </div>
</div>
</div>
<?php endwhile; ?>
          
<?php get_footer(); ?>