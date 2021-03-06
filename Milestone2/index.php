<?php 
include __DIR__ .'/database/disc_data.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Dischi </title>
    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic"
      rel="stylesheet"
    />
    <!-- Css Link -->
    <link rel="stylesheet" href="./assets/css/style.css" />
  </head>
  <body>
   <div id="app">
      <main>
        <nav>
          <img src="./assets/img/logo.png" alt="copertina album" />
          <div class="select_genre">
            <label for="genere">Scegli un genere:</label>
            <select name="genere" id="genere">
              <option value="">All</option>
              <option value="Rock">Rock</option>
              <option value="Pop">Pop</option>
              <option value="Metal">Metal</option>
              <option value="Jazz">Jazz</option>
            </select>
          </div>
        </nav>
        <!-- /nav -->

        <div class="gallery">
        <div
            class="album_card"
            v-for="disc in dischi"
           
          >
            <img class="poster" :src="disc.poster" alt="" />
            <h3>{{disc.title}}</h3>
            <p>{{disc.author}}</p>
            <p>{{disc.year}}</p>
            <p>Genre : {{disc.genre}}</p>
          </div>
        </div>
      </main>
   </div>
    
    <!-- VueJs CDN -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>

    <!-- Axios CDN -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"
      integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <!-- Main JS -->
    <script src="./assets/js/app.js"></script>
  </body>
</html>