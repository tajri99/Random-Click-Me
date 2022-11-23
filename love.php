<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Love Calculator</title>
    <style>
        *{
            margin: 0;
            padding:0;
            box-sizing: border-box;
            color: #fff;

        }
        body{
            background-image: url(./images/love-bg.png) ;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            width: 100vw;
            height: 100vh;

        }
        header{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 100%;
        }
        span{
            color: cadetblue;
        }
    

        
    </style>
  </head>

<body>
<header>
    <div class="card w-50 m-auto text-center">
        <div class="card-header bg-danger">LOVE CALCULATOR</div>
        <div class="card-body">
            <form id="form" class="form-inline w-50 m-auto calculator-form" >
                <div class="form_group">
                    <input type="text" id="name" class="form-control" placeholder="masukan nama pasangan">
                </div>
                <div class="text-center"><span class="pl-4 pr-4">+</span></div>
                <div class="form_group">
                    <input type="text"  id="sname" class="form-control" placeholder="masukan nama pasangan">
                </div>
            </form>
            <br>
                <button  class="btn btn-danger w-25" onclick="loveCalculator()">Hitung</button>
                <a href="./index.php">
                <button  class="btn btn-danger w-25">Home</button>
                </a>
            <br>
            <br>
            <div>
                <input type="text"  id="lovevalue" class="form-control text-center w-50 m-auto">
            </div>
            <br>
            <div>
                <input type="text"  id="message" class="form-control text-center w-50 m-auto">
            </div>
        </div>
        <div class="card-footer bg-danger">Jangan Baper Ya...!<br>Cuman Perhitungan Komputer Ko</div>
    </div>
</header>


<script>
function loveCalculator(){
    var name = document.getElementById('name').value;
    var name = document.getElementById('sname').value;

    if (name == ""){
        alert('Silahkan masukan nama secara lengkap');
    }else if(name.lenght <= 2 ){
        alert('nama minimal 3 huruf')
    }
    else if(sname == "" ){
        alert('silahkan masukkan nama secara lengkap')
    }
    else if(sname.lenght <= 2 ){
        alert('nama minimal 3 huruf')
    }
    else{
    var lovedata = Math.random()*100;
    lovedata=Math.floor(lovedata);
    document.getElementById('lovevalue').value = lovedata + "%";
    if(lovedata <=50){
        document.getElementById('message').value = "Duh mending ganti deh...!";
    }
    else if (lovedata >=50){
        document.getElementById('message').value = "Pertahanin....!";
    }
    }
}

        

</script>
</body>
</html>

