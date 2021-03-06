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
   
      <main>
        <nav>
          <img src="./assets/img/logo.png" alt="copertina album" />
          <div class="select_genre">
            <label for="genere">Scegli un genere:</label>
            <select name="genere" id="genere" v-model="selected">
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
            <?php  foreach($discs as  $disc):
                // var_dump($disc['title']); 
            ?>

                <div class="album_card">
                    <img class="poster" src="<?php echo $disc['poster']; ?>" alt="" />
                    <h3><?php echo $disc['title']; ?></h3>
                    <p><?php echo $disc['author']; ?></p>
                    <p><?php echo $disc['year']; ?></p>
                    <p><?php echo $disc['genre']; ?></p>
                </div>
   
            <?php endforeach ?>
        </div>
      </main>
    

  </body>
</html>