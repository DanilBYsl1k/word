<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Taiti</title>
  <?php wp_head() ?>
</head>
<body>
  <header class="header">
    <div class="header__container container">
      <div class="logo">
        <img src="<?php echo get_template_directory_uri(); ?> /assets\images\icon\logo.svg" alt="">
        <span>TAHITI</span>
      </div>

      <nav class="navigation">
        <ul class="header__navigation-list">
          <li>Discover</li>
          <li>Experience</li>
          <li>Travel guides</li>
          <li>About</li>
        </ul>
      </nav>
    </div>
  </header>