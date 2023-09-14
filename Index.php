<!DOCTYPE html>
<html>
  <head>
    <title>FactoryTech</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <center>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <h1>FactoryTech</h1>
        <select name="Computadores">
          <option>Computador de Mesa</option>
          <option>Computador Portatil</option>
          <option>Computador Todo en Uno</option>
        </select>
        <select name="Estilos">
          <option>Gamer</option>
          <option>Profesional</option>
        </select>
        <input type="submit" value="Comprar" />
      </form>
      <section>
        <?php

require "Clases.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Tipo=$_POST['Computadores'];
    $Estilo=$_POST['Estilos'];

    if($Tipo=="Computador de Mesa" && $Estilo=="Gamer"){
      echo "<img src='Assets/desktopGamer.webp'> <br>";
        $Computadores= new FactoryDesktopGamer();
    }
    if($Tipo=="Computador de Mesa" && $Estilo=="Profesional"){
      echo "<img src='Assets/7148191-800-auto.webp'> <br>";
        $Computadores= new FactoryDesktopProfesional();
    }
    if($Tipo=="Computador Portatil" && $Estilo=="Gamer"){
      echo "<img src='Assets/portatilGamer.jpg'> <br>";
        $Computadores= new FactoryPortatilGamer();
    }
    if($Tipo=="Computador Portatil" && $Estilo=="Profesional"){
      echo "<img src='Assets/portatil.jpg'> <br>";
        $Computadores= new FactoryPortatilProfesional();
    }
    if($Tipo=="Computador Todo en Uno" && $Estilo=="Gamer"){
      echo "<img src='Assets/AllGamer.png'> <br>";
        $Computadores= new FactoryAllInOneGamer();
    }
    if($Tipo=="Computador Todo en Uno" && $Estilo=="Profesional"){
      echo "<img src='Assets/all.webp'> <br>";
        $Computadores= new FactoryAllInOneProfesional();
    }


    $Clase= new EnsamblajeComputadores($Computadores);

    }
    ?>
      </section>
    </center>
  </body>
</html>
