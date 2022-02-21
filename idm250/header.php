<DOCTYPE html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/dist/styles/main.css' ?>">    
<?php
wp_head();
?>
<title><?php wp_title(); ?> </title>

</head>

<body>

<div class="logo_art">
            <h1>
              <a href="https://mcinerneymedia.com/idm250/">
                  <img alt="Centered logo of yellow pencil on white paper with purple swirl behind it." src="https://mcinerneymedia.com/idm250/wp-content/uploads/2022/02/logo4.png" width="72" height="72">
                </a>
          </h1>
        </div>

    <?php
    wp_nav_menu(['theme_location'=> 'primary_menu']);
    ?>