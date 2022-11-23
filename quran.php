<?php
$sumber = "https://api.banghasan.com/quran/format/json/acak";
$ayat = file_get_contents($sumber);
$data=json_decode($ayat, true);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Random Number</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>

<body>
<div class="px-4 py-5 my-5 text-center">
  <a href="./index.php">
  <img class="d-block mx-auto mb-4" src="./images/Click Me.png" alt="logo" width="72" height="57">
  </a>  
    <div class="col-lg-6 mx-auto">
        <h1 class="display-5 fw-bold">Random Ayat Al-Quran</h1>
        <hr>
      <h3 class="lh-lg" ><?php echo $data['acak']['ar'] ['teks']?></h3>
      <hr>
      <p class="fw-bold"> Artinya : <?php echo $data['acak']['id'] ['teks']?> </p>
      <h4 class="fw-bold">surat : <?php echo $data['acak']['ar']['surat']?> ayat : <?php echo $data['acak']['ar']['ayat']?></h4>
      <hr>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <button type="button" onClick="window.location.reload();" class="btn btn-primary btn-lg px-4 gap-3">Get Ayat</button>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>