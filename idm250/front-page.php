<?php get_header(); ?>
<div class="container">
          <!--sizing for the head background image showcase, based on screen sizes.-->
          <picture>
            <source media="(max-width: 600px)" srcset="http://localhost:8888/wp-content/uploads/2022/02/bg_s.png">
            <source media="(max-width: 1020px)" srcset="http://localhost:8888/wp-content/uploads/2022/02/bg_m.png">
            <source media="(min-width: 1021px)" srcset="https://mcinerneymedia.com/idm250/wp-content/uploads/2022/02/new_bg_l_2.png">
            <img class="main" src="https://mcinerneymedia.com/idm250/wp-content/uploads/2022/02/new_bg_l_2.png" alt="Gallery of Steven's work at an angle.">
          </picture>
          <div class="centered">
            <h2 class="hi">Steven McInerney—</h2>
            <p class="hey">Hi! I do <b>UI/UX design & digital marketing</b>, this is my website. Take a look around!</p>

          </div>
        </div>
        <?php get_footer(); ?>