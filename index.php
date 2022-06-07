<?php

$sumber = 'https://masak-apa-tomorisakura.vercel.app/api/recipes';
$konten = file_get_contents($sumber);
$data = json_decode($konten, true);

//var_dump($data);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">

    <title>Api Resep Makanan</title>
  </head>
  <body>
    <h1 class="text-center mt-3">API RESEP MAKANAN</h1>
    <h5 class="text-center mt-1">mramadhanurh</h5>

    <div class="container">
        <div class="row">
            <?php foreach($data['results'] as $row) {
            
            ?>
            <div class="col-3 mt-3">
                <div class="card shadow-lg" style="width: 18rem;">
                    <img src="<?php echo $row['thumb'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5><?php echo $row['title'] ?></h5>
                        <hr>
                        <p class="card-text">Tingkatan :<?php echo $row['dificulty'] ?> <br> Porsi : <?php echo $row['portion'] ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    -->
  </body>
</html>