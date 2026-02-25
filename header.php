<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="Landing page for a professional photographer.">

   <!-- Open Graph / Facebook -->
   <meta property="og:type" content="website">
   <!-- Пока не на сервере -->
   <!-- <meta property="og:url" content="https://michelle-black.com/"> -->
   <meta property="og:title" content="Photographer Portfolio">
   <meta property="og:description" content="Landing page for a professional photographer.">
   <!-- <meta property="og:image" content="https://michelle-black.com/images/og-image.jpg"> -->

   <!-- Twitter -->
   <meta name="twitter:card" content="summary_large_image">
   <meta name="twitter:title" content="Photographer Portfolio">
   <meta name="twitter:description" content="Landing page for a professional photographer.">
   <!-- <meta name="twitter:image" content="https://michelle-black.com/images/og-image.jpg"> -->

   <title>Michelle Black</title>
   <?php wp_head(); ?>
</head>

<body>
  <div class="wrapper">
    <header class="header">
      <div class="header__container container">
        <div class="header__left">
          <div class="header__logo corner-border corner-border--tally">
            <span class="corner top-left"></span>
            <span class="corner top-right"></span>
            <span class="corner bottom-left"></span>
            <span class="corner bottom-right"></span>
            <a href="#" aria-label="Go to homepage">Michelle Black</a>
          </div>
        </div>
        <div class="header__right" id="mobile-menu" aria-hidden="false">
          <nav class="header__nav" aria-label="Navigation menu">
            <ul class="header__items" id="mobile-menu">
              <li class="header__item"><a href="#about">About me</a></li>
              <li class="header__item"><a href="#gallery">My work</a></li>
              <li class="header__item"><a href="#footer">Contacts</a></li>
            </ul>
          </nav>

          <div class="header__connect corner-border">
            <button class="header__btn" aria-label="Select a date for booking" type="button">
              Select a date
            </button>
            <span class="corner top-left"></span>
            <span class="corner top-right"></span>
            <span class="corner bottom-left"></span>
            <span class="corner bottom-right"></span>
          </div>
        </div>
        <button id="burger" class="burger" type="button" aria-controls="mobile-menu">
          <span class="burger-line"></span>
          <span class="burger-line"></span>
          <span class="burger-line"></span>
        </button>
      </div>
    </header>
        <main class="main">