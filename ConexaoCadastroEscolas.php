<?php
$conexao= mysqli_connect("localhost","root","","escola") ;



if(isset($_POST['botao'])){
    $ciclo1 = $_POST['primario'];
    $ciclo2 = $_POST['secundario'];
    $ciclo3 = $_POST['medio'];
    $ciclo4 = $_POST['todoCiclo'];
    $curso1 = $_POST['curso1'];
    $curso2 = $_POST['curso2'];
    $curso3 = $_POST['curso3'];
    $curso4 = $_POST['curso4'];
    $curso5 = $_POST['curso5'];
    $curso6 = $_POST['curso6'];
    $curso7 = $_POST['curso7'];
    $curso8 = $_POST['curso8'];
    $curso9 = $_POST['curso9'];
    $curso10 = $_POST['curso10'];
    $curso11 = $_POST['curso11'];
    $curso12 = $_POST['curso12'];
    $curso13 = $_POST['curso13'];
    $curso14 = $_POST['curso14'];
    $curso15 = $_POST['curso15'];
    $nome = $_POST['nomeEscola'];
    $nomeDirector = $_POST['nomeDirector'];
    $nomeSubDirector = $_POST['nomeSubDirector'];
    $nomeSecretaria = $_POST['nomeSecretaria'];
    $numeroEscola = $_POST['numeroEscola'];
    $senhaEscola = $_POST['senhaEscola'];
    $emailEscola = $_POST['emailEscola'];
    $contactosEscola = $_POST['contactosEscola'];
    $dataEscola = $_POST['dataEscola'];
    $idEscola = $_POST['idEscola'];
    $tipoEnsino = $_POST['tipoEnsino'];
    $municipioEscola = $_POST['municipioEscola'];
    $provinciaEscola = $_POST['provinciaEscola'];
    
    $dados ="INSERT INTO dadosescolas (idEscola,nomeDirector,nomeSubDirector,nomeSecretaria,nomeEscola,numeroEscola,senhaEscola,emailEscola,contactosEscola,dataEscola,tipoEnsino,tipoCiclo1,tipoCiclo2,tipoCiclo3,tipoCiclo4,municipioEscola,provinciaEscola)
     VALUES ('$idEscola','$nomeDirector','$nomeSubDirector','$nomeSecretaria','$nome','$numeroEscola','$senhaEscola','$emailEscola','$contactosEscola','$dataEscola','$tipoEnsino','$ciclo1','$ciclo2','$ciclo3','$ciclo4','$municipioEscola','$provinciaEscola')" ;
      mysqli_query($conexao,$dados);

      $dados1 = "INSERT INTO cursosescolas (idEscola,curso1,curso2,curso3,curso4,curso5,curso6,curso7,curso8,curso9,curso10,curso11,curso12,curso13,curso14,curso15) VALUES 
      ('$idEscola','$curso1','$curso2','$curso3','$curso4','$curso5','$curso6','$curso7','$curso8','$curso9','$curso10','$curso11','$curso12','$curso13','$curso14','$curso15')";
      mysqli_query($conexao,$dados1); 
  
   
} 


?>