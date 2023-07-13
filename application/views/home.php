<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--==================== CSS LINK ====================-->
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    
    <!--==================== BOXICONS ====================-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    
    <!--==================== REMIXICONS ====================-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    
    <!--==================== GOOGLE FONT ====================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400&family=Permanent+Marker&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!--==================== TITLE ====================-->
	<title>Pokemon Pokemon🎶🎶</title>

    <!--==================== FAVICON ====================-->
    <link rel="icon" href="<?=base_url()?>/assets/img/icon_pikachu.png" type="image/png">

</head>
<body>
    <!--==================== HEADER ====================-->
    <header>
        
        <a href="#" class="logo"><img src="assets/img/logo.png" alt="" class="logo-img"></a>
        
        <ul class="nav-list">
            <li><a href="#">Home</a></li>
            <!-- <li><a href="#">About</a></li>
            <li><a href="#">Clans</a></li>
            <li><a href="#">Town hall</a></li> -->
            <li><a href="#">Contact</a></li>
        </ul>

        <div class="bx bx-menu" id="menu-icon"></div>
    </header>

    <section class="hero">
        <div class="hero-text">
            <h5>#1</h5>
            <h4>Pokemon</h4>
            <h1><img src="assets/img/logo.png" alt="" class="logo-text"></h1>
            <p>All the Pokémon data you'll ever need in one place,
                easily accessible through a modern RESTful API.</p>
            <!-- <a href="#">Compare</a>
            <a href="#" class="ctaa"><i class="ri-play-fill"></i>Watch Gameplay</a> -->
        </div>

        <div class="hero-img">
            <div class="searchBox">
              <input
                id="pokemonName"
                type="Pokemon name"
                placeholder="Pokemon name or ID"
              />
              <button class="search" id="search">🔎</button>
            </div>
      
            <div class="pokemonBox"></div>
          </div>
        
        <!-- <div class="hero-img">
            <img src= "assets/hero.png" alt="">
        </div> -->
    </section>

    <!-- <div class="icons">
        <a href="#"><i class="ri-facebook-fill"></i></a>
        <a href="#"><i class="ri-facebook-fill"></i></a>
        <a href="#"><i class="ri-facebook-fill"></i></a>
    </div> -->

    <div class="scroll-down">
        <a href="#"><i class="ri-arrow-down-s-fill"></i></a>
    </div>

    <!--==================== SCROLLDOWN ====================-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!--==================== MAIN JS ====================-->
    <script src="assets/js/main.js"></script>
</body>
</html>