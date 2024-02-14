<!DOCTYPE html>
<html lang="pt">

<head>
<?php 
  $conexao= mysqli_connect("localhost","root","","escolaprovincia") ;

?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="bibliotecas/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bibliotecas/chart.js"></script>
    <script src="bibliotecas/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/EstatisticaProvincias.css">
    <link rel="stylesheet" href="bibliotecas/bootstrap.min.css">

    <title>Estatistica Provincias</title>

     <!-- CONTADOR DE ESCOLAS -->
     <?php
                 $banco2 ="SELECT *FROM escolas";
                 $dados2 = mysqli_query($conexao,$banco2);
                 $contador2 = 0;
                 $contador3 = 0;
                while( $resultado2 = mysqli_fetch_array($dados2)){
                     if($resultado2['tipoEnsino']=='Publica'){
                        $contador2++;
                     }else{
                        $contador3++;
                     }
                      
                }
            ?>

    <div class="container-fluid" id="divBarra">

        <h2 id="pub">
            <a class="linkBack" href="EstatisticaProvincias.php"><img class="icoBack" src="imagem/icoBack.png"></a>

            ESC-PÚBLICAS: <?php  echo $contador2;   ?>
        </h2>

        <h2 id="priva">ESC-PRIVADAS: <?php  echo $contador3;   ?></h2>




    </div>
</head>

<body>
<?php  
// LINK DE CADA ESCOLA
$banco1 ="SELECT *FROM escolas";
$dados1 = mysqli_query($conexao,$banco1);


?>

    <div class="container" id="divPrincipal">

        <canvas id="myChart"></canvas>
        <?php
        $i = 1;
         while($resultado1 = mysqli_fetch_array($dados1)){

           echo " <a id='linkLuandaEs'  href='CadaEscola.php?idEscola=$resultado1[idEscola]'>E$i</a>";
           $i++;

         }


        ?>



    </div>


</body>
<?php  
// CONTADOR QUEIXA EM LUANDA
$banco ="SELECT *FROM escolas";
$dados = mysqli_query($conexao,$banco);


?>


<script>
    var ctx = document.getElementById('myChart').getContext('2d');

    var chart = new Chart(ctx, {
        // O tipo de grafico
        type: 'line',

        // Os dados do grafico


        data: {
            labels: ['E1', 'E2', 'E3', 'E4', 'E5', 'E6', 'E7', 'E8', 'E9', 'E10', 'E11', 'E12', 'E13', 'E14', 'E15', 'E16', 'E17', 'E18','E19','E20'],

            datasets: [{
                label: 'Reclamações',

                borderColor: 'red',
                data: [
                    <?php
                       while($resultado = mysqli_fetch_array($dados)){
                           echo $resultado['totalQueixa'].",";
                       }
                    ?>
                ],
                borderWidth: 3,

            }, {


                label: 'Elogios',

                borderColor: 'lime',
                data: [0, 9, 3, 12, 25, 35, 10, 10, 4, 15, 2, 2, 3, 0, 0, 7, 5, 2],
                borderWidth: 3,

            }]
        },

        // Configuracao do grafico

        options: {

            title: {
                text: 'GRÁFICO DAS ESCOLAS EM LUANDA',
                display: 1,
                fontSize: 20,

            },

            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0
                }
            }



        }
    });
</script>

</html>