<?php
$sumber = "https://masak-apa.tomorisakura.vercel.app/api/recipes";
$bahan = file_get_contents($sumber);
$results=json_decode($bahan, true);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>food idea</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
      <header class="d-flex flex-wrap justify-content-between align-items-center py-3 my-3 border-bottom">
        <div class="col-md-4 d-flex align-items-center">
          <a href="/projek coba/index.php" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <img src = "/Projek Coba/images/Click Me.png" class="bi" width="30" height="24">
          </a>
          <span class="mb-3 mb-md-0 text-muted">Random Click by Tajri Noor</span>
        </div>
      </header>
  </div>  
  <h1 class = "text-center mt-3">Food Idea</h1>   
  <div class="container">
        <div class="row">
            <?php foreach ($results ['results'] as $row) {
            
            ?>
            <div class ="col-3 mt-3">
                <div class="card shadow-lg" style="width: 18rem;">
                <img src="<?php echo $row['thumb'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5><?php echo $row['title'] ?></h5>    
                    <hr>
                    <p class="card-text">Tingkat Kesukaran : <?php echo $row['difficulty'] ?></p>
                    <p class="card-text">Estimasi Waktu  : <?php echo $row['times'] ?></p>
                </div>
                </div>
            </div>
            <?php } ?>
        </div>
     </div>
     <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
          <a href="/projek coba/index.php" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <img src = "/Projek Coba/images/Click Me.png" class="bi" width="30" height="24">
          </a>
          <span class="mb-3 mb-md-0 text-muted">&copy; Random Click by Tajri Noor</span>
        </div>
    
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
          <li class="ms-3"><a class="text-muted" href="https://twitter.com/TajriNoor" target="_blank" rel="nopener noreferer"><img src= "./images/tw.png" class="bi" width="24" height="24"></a></li>
          <li class="ms-3"><a class="text-muted" href="https://github.com/tajri99" target="_blank" rel="nopener noreferer" ><img src= "./images/github.png"class="bi" width="24" height="24"></a></li>
          <li class="ms-3"><a class="text-muted" href="https://www.instagram.com/noor_tn99/" target="_blank" rel="nopener noreferer"><img src="./images/ig.png" class="bi" width="24" height="24"></a></li>
        </ul>
      </footer>
  </div>      



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>