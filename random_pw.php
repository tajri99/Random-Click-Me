<?php
$sumber = "https://passwordinator.herokuapp.com?num=true&char=true&caps=true";
$bahan = file_get_contents($sumber);
$data=json_decode($bahan, true);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>random password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
  <body>
  
  <div class="px-4 py-5 my-5 text-center">
  <a href="./index.php">
  <img class="d-block mx-auto mb-4" src="./images/Click Me.png" alt="logo" width="72" height="57">
  </a>  
    <h1 class="display-5 fw-bold">Random Password Generator</h1>
    <div class="col-lg-6 mx-auto">
      <h2 class="lead mb-4">Your password is :</h2>
      <h1><?php echo $data['data'] ?></h1>
      <hr>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <button type="button" onClick="window.location.reload();" class="btn btn-primary">Get Password</button>
        <a href="https://keep.google.com/u/0/" target="_blank" rel="nopener noreferer" class="btn btn-primary"> Save On Note <i class="bi bi-cloud-plus-fill"></i>
        </a>
      </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>