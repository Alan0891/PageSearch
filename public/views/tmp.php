<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./public/assets/style.css">
    <title>ARTSEARCH - Seu site de pesquisas</title>
</head>
<body>
  
    <aside>
    <div id="menu_btn">
        <i id="btn_menu_i" class="fa-solid fa-bars fa-2x"></i>
    </div>    
    <div id="menu" class="menu_open">
        <ul>
            <li><a href="home"><i class="fa-solid fa-house"></i> Home</a></li>
            <li><a href="journ" id=""><i class="fa-solid fa-pen"></i> Edit</a></li>
            <li><a href="#" id="profile"><i class="fa-brands fa-github"></i> GitHub</a></li>
        </ul>
    </div>
    </aside>


    <div class="container-fluid">
    <section class="container-fluid">  
    <div id="clock" class="d-flex justify-content-start">
      <img src="./public/assets/imgs/brasil.png" alt="nacionalidade" title="nacionalidade" width="35" height="35">
      <p class="mt-2 ml-2"></p>
    </div>
    
    <div class="container"> 
    <?php $this->rendering($view,$data);?>
    </div>
    </section>

    <div id="top"><i class="fa-solid fa-arrow-up-long"></i></div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/8feb4c2c3b.js" crossorigin="anonymous"></script>
    <script src="./public/assets/style.js"></script>
</body>
</html>