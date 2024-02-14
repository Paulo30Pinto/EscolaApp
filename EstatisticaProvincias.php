<!DOCTYPE html>
<html lang="en">
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
       

     <!-- CONTADOR DE ESCOLAS PUBLICAS -->
     <?php
                 $banco1 ="SELECT *FROM escolas";
                 $dados1 = mysqli_query($conexao,$banco1);
                 $contador = 0;
                 $contador1 = 0;
                while( $resultado1 = mysqli_fetch_array($dados1)){
                    if($resultado1['tipoEnsino'] == 'Publica')
                    {
                        $contador++;
                    }
                    else{

                        $contador1++;
                    }
                      
                }
            ?>

    <div class="container-fluid" id="divBarra">

    <h2 id="pub">
    <a class="linkBack" href="AdministradorPrincipal.php"><img class="icoBack" src="imagem/icoBack.png"></a>

      ESC-PÚBLICAS: <?php echo $contador;      ?>
     </h2>

    <h2 id="priva">ESC-PRIVADAS: <?php echo $contador1;      ?></h2>




</div>
</head>
<body>

<div class="container" id="divPrincipal">

<canvas id="myChart"></canvas>
<a id="linkLuanda" href="EstatisticaCadaProvincias.php">Luanda</a>



</div>
    
</body>

<?php  
// CONTADOR QUEIXA EM LUANDA
$banco ="SELECT *FROM escolas";
$dados = mysqli_query($conexao,$banco);

$contadorLuanda = 0;
$queixaLuanda = 0;
while($resultado = mysqli_fetch_array($dados)){
      $contadorLuanda+=$resultado['totalQueixa'];
}
$queixaLuanda = $contadorLuanda;

?>

<script>
    var ctx = document.getElementById('myChart').getContext('2d');

    var chart = new Chart(ctx, {
        // O tipo de grafico
        type: 'line',

        // Os dados do grafico


        data: {
            labels: ['Benguela', 'Huila', 'Luanda', 'Huambo', 'Cabinda', 'K.Sul', 'K.Norte', 'L.Sul', 'L.Norte', 'Bie', 'Bengo', 'Malange', 'K.Kubango', 'Moxico', 'Cunene', 'Zaire', 'Namibe', 'Uige'],

            datasets: [{
                label: 'Reclamações',

                borderColor: 'red',
                data: [0,0,<?php echo $queixaLuanda; ?>,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
                                
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
                text: 'GRÁFICO DAS ESCOLAS EM ANGOLA',
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