<?php
/*
Template Name: Work
*/

?>

<?php get_header(); ?>




<div class="largecontainer">
<div class="workcontainer">
<?php while (have_posts()) : the_post(); ?>
<?php
      // https://developer.wordpress.org/reference/classes/wp_query/
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

      $arg = [
          'post_type' => 'idm-projects',
          'post_status' => 'publish',
          'posts_per_page' => 6,
          'order' => 'DESC',
          'paged' => $paged

      ];
      $project_query = new WP_Query($arg);

      ?>
      <?php
        while ($project_query->have_posts()) : $project_query->the_post();
        get_template_part('components/card');
        endwhile;
        // Custom Pagination for Custom loops
        $big = 999999999; // need an unlikely integer
        echo paginate_links([
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '?paged=%#%',
            'current' => max(1, get_query_var('paged')),
            'total' => $project_query->max_num_pages
        ]);
        echo '</nav>';
        // After looping through a separate query, this function restores the $post global to the current post in the main query.
        wp_reset_postdata();
      ?>
  </div>
</div>

<?php the_post_thumbnail(); ?>

<div class="site_menu">
    <?php the_content(); ?>
</div>
</div>
<?php endwhile; ?>

<?php get_footer(); ?>