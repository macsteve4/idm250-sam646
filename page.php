<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
<div class="">
<h1 class=""><?php the_title(); ?></h1>

<?php the_post_thumbnail(); ?>

<div class="about_me">
    <?php the_content(); ?>
</div>
</div>
<aside>
    <p><?php echo get_field('project_group'); ?>
    </p>
  </aside>
<?php endwhile; ?>

<?php get_footer(); ?>