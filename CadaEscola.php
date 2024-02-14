<!DOCTYPE html>
<html lang="pt">

<head>
<?php 
  $conexao= mysqli_connect("localhost","root","","escolaprovincia") ;

  $idEscola = $_GET['idEscola'];
  $banco = "SELECT *FROM escolas where idEscola = '$idEscola'";
  $dados = mysqli_query($conexao,$banco);
  $resultado = mysqli_fetch_array($dados);

?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="bibliotecas/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/RequisicaoAjax1.js"></script>
    <script src="bibliotecas/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/EstatisticaProvincias.css">
    <link rel="stylesheet" href="bibliotecas/bootstrap.min.css">

    <title>Estatistica Provincias</title>

    <div class="container-fluid" id="divBarra">

        <h2 id="cadapub">
            <a class="linkBack" href="EstatisticaCadaProvincias.php"><img class="icoBack" src="imagem/icoBack.png"></a>

            [ <?php echo $resultado['tipoEnsino']." ] - [ ".$resultado['totalQueixa']."% de Queixas"; ?> ] 
        </h2>

        <h2 id="cadapriva"><?php echo $resultado['nome']; ?> <a id = "btGps" class="btn btn-primary" href="<?php $resultado['url1']; ?>" target="_blank" >GPS</a></h2>
        




    </div>
</head>

<body>

    <div class="container-fluid" id="divPrincipal11">
      <div id="bCiclo">  <b ><?php echo $resultado['ciclo1']."<br>".$resultado['ciclo2']."<br>".$resultado['ciclo3']."<br>".$resultado['ciclo4'];   ?></b></div><br>
        <form id="formSlide">

            <div class="container" id="divSlide">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="imagem/fotoEscola/<?php echo $resultado['imgPrincipal'];?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="imagem/fotoEscola/<?php echo $resultado['img1'];?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="imagem/fotoEscola/<?php echo $resultado['img2'];?>"class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="imagem/fotoEscola/<?php echo $resultado['img3'];?>"class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="imagem/fotoEscola/<?php echo $resultado['img4'];?>"class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="imagem/fotoEscola/<?php echo $resultado['img5'];?>"class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                  <span class="visually-hidden">Previous</span>
                                                </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                  <span class="visually-hidden">Next</span>
                                                </button>
                </div>

            </div>



        </form>
      <b>Id-Escola: <?php echo $resultado['idEscola'];?></b><br> Nome do Director: <b><?php echo $resultado['nomeDirector']; ?></b><br> Nome do Sub-Director: <b><?php echo $resultado['nomeSubDirector']; ?></b><br> Secretaria: <b><?php echo $resultado['nomeSecretaria']; ?></b><br> Contactos: <b><?php echo $resultado['contactos'];?></b>

              
    <!--  CHAT COM AS ESCOLAS   -->
      <div id="formChat1" >
      <h2>Chat Escola</h2>
                <div id='formScrol'>
                    <div id='history'>
                        


                    </div>
                    <hr>
                    <div class='d-flex justify-content' id='outro'>
                        <div class='form mb-2 col-sm-5'>
                            <textarea class='form-control'  id='texto' cols='20' rows='1' ></textarea>
                            <button class='btn btn-primary'  id='bb'>Enviar</button>

                        </div>

                    </div>
                    <input type='file' id='inputFile'>
                </div>
      
               
           </div>


    </div>


</body>

</html>