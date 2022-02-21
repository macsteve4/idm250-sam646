<?php get_header(); ?>
<div class="container">
          <!--sizing for the head background image showcase, based on screen sizes.-->
          <picture>
            <source media="(max-width: 600px)" srcset="http://localhost:8888/wp-content/uploads/2022/02/bg_s.png">
            <source media="(max-width: 1020px)" srcset="http://localhost:8888/wp-content/uploads/2022/02/bg_m.png">
            <source media="(min-width: 1021px)" srcset="http://localhost:8888/wp-content/uploads/2022/02/bg_l.png">
            <img src="http://localhost:8888/wp-content/uploads/2022/02/bg_s.png" alt="Gallery of Steven's work at an angle.">
          </picture>
          <div class="centered">
            <h2 class="hi">Welcome!</h2>
            <p class="hey">I'm <b>Steven</b>, and this is my website. Feel free to take a look around with the tabs up top.</p>

          </div>
        </div>
        <?php
wp_footer();
?>

<div class="bottom">
                <a href="mailto:sam646@drexel.edu">
                  <img class="stevenlinka" alt="Small Envelope, a linked image directing to Steven's email." src="http://localhost:8888/wp-content/uploads/2022/01/mail.png">
                  </a>
                <a href="https://www.linkedin.com/in/steven-mcinerney-3b106819a/" target="_blank">
                  <img class="stevenlinkb" alt="IN Logo from Linkedin, a linked image directing to Steven's linkedin profile." src="http://localhost:8888/wp-content/uploads/2022/01/linkedin.png">
                  </a>
                </div>

</body>

</html>