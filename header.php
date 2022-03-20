<DOCTYPE html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/dist/styles/main.css' ?>">
<link rel=“icon” href=”favicon.ico” type=“image/x-icon”>
<link rel=“shortcut icon” href=“favicon.ico” type=“image/x-icon”>

<title><?php wp_title(); ?> </title>

<?php
wp_head();
?>

</head>

<body <?php body_class(); ?>>

<div class="logo_art">
            <h1>
              <a href="https://mcinerneymedia.com/idm250/">
                  <img class="logohead" src="https://mcinerneymedia.com/idm250/wp-content/uploads/2022/03/logo3.svg">
                </a>
          </h1>
        </div>

    <?php
    wp_nav_menu(['theme_location'=> 'primary_menu']);
    ?>
    <!--We had discussed this menu in your open lab, you said it was alright that I had the logo hard coded.-->