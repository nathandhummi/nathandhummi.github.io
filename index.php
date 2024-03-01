#!/usr/local/bin/php
<?php

    session_save_path(__DIR__ . "/sessions/");
    session_name('myWebpage');
    session_start();

    if (!$_SESSION['loggedin'] || !isset($_COOKIE['username'])) { //not logged in
      header('Location: login.php');
      exit;
    }

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Homework 1</title>
  </head>

  <body>
    <header>
      <span id="greeting">
        <?php
          echo '<p>Hello, ' . $_COOKIE['username'] . '!</p>';
        ?>
      </span>
      <nav id="navigation">
        <ul>
          <li>Home</li>
          <li><a href="login.php">Login</a></li>
          <li><a href="blog.php">Our Posts</a></li>
          <li><a href="merch.php">Our Products</a></li>
        </ul>
    </nav>
      <h1>
        All About Pokemon
      </h1>
    </header>

    <main>
      <section>
        <h2>
          There are more than 1000 Pokemon!
        </h2>
        <p>
          There are many different types of Pokemon as well. Here is a picture of 
          different Pokemon assorted by their primary color.
        </p>
        <img src="https://cdn.vox-cdn.com/thumbor/K3iHHsFjCOHjsEDWiK6S-DhUo5A=/312x0:1746x956/1400x1400/filters:focal(312x0:1746x956):format(png)/cdn.vox-cdn.com/uploads/chorus_image/image/37251612/pokemon-list.0.0.png" class="pokemonimg" alt="Pokemon sorted by color">
      </section>

      <section>
        <h2>
          My favorite Pokemon is Empoleon.
        </h2>
        <p>
          This is because Empoleon is a cool designed emperor penguin and it 
          was the first Pokemon I ever picked when playing my first game.
        </p>
        <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/395.png" class="empoleonimg" alt="Empoleon">
      </section>

      <section>
        <h2>
          My top three Pokemon are:
        </h2>
        <ol>
          <li>Empoleon</li>
          <li>Shinx</li>
          <li>Spheal</li>
        </ol>
      </section>
    </main>

    <section>
        <h2>
            Some recent posts by other users:
        </h2>

        <p>
            <b>JohnnyPickles88</b> says: Does anyone have a good suggestion for how
            to join yarn best? I usually would do a Russian join, but I am using 
            cotton and the yarn is slippery.
        </p>

        <p>
            <b>malicious666</b> says: Could anyone see how I could fix my 
            <a href="scarf1.html" target="_blank" rel="opener">scarf</a>? 
            Please help. I'm so sad. Here's a 
            <a href="scarf2.html" target ="_blank" rel="opener">picture</a> 
            of the other side.
        </p>

        <p>
            <b>LoisGriffin</b> says: I like yarn. I just think they're neat.
        </p>
    </section>

    <footer>
      <hr>
      &copy; Nathan Dhami, 2023
    </footer>
  </body>

</html>