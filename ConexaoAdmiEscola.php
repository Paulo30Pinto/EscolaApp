
<!-- <script type="text/javascript" src="bibliotecas/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="js/AdmiEscola.js"></script> 
 <script type="text/javascript" src="js/requisicaoAdmiEscola.js"></script> --> 
 <link rel="stylesheet " href="bibliotecas/bootstrap.min.css "> 


<?php

$conexao = mysqli_connect("localhost","root","","escola");

//CADASTRAR DISCIPLINAS 
if(isset($_POST['btDisciplina'])){

           
           $disciplina = $_POST['inputDisciplina'];
         $curso = $_POST['inputCurso'];
         //$idEscola = $_POST['idEscola'];
         $banco = "INSERT INTO tbdisciplinas(disciplinas , cursos) VALUES ('$disciplina','$curso')";
         mysqli_query($conexao,$banco);

    

                             $dadosDisc ="SELECT *FROM tbdisciplinas"; 
                             $resultadoDisc = mysqli_query($conexao,$dadosDisc);

                             echo json_encode( $resultadoDisc);
                             /*
                             $n = 0;  



                                  
                                echo "
                                      <table class='table table-striped'>
                                           <thead>
                                              <tr>
                                                <th scope='col'>N</th>
                                                <th scope='col'>Id</th>
                                                <th scope='col'>Disciplinas</th>
                                                <th scope='col'>Cursos</th>
                                                <th>Botao</th>
                                               </tr>
                                           </thead>
                                            <tbody>";
                                              while($resultDisc = mysqli_fetch_array($resultadoDisc)){
                                                $n++;
                              echo"             <tr>
                                                <td > $n </td>
                                                <td> $resultDisc[idEscola] </td>
                                                <td>$resultDisc[disciplinas] </td>
                                                <td>$resultDisc[cursos] </td>
                                                <td><a href='#' data-idpegar='$resultDisc[id]' data-pegardisciplina='$resultDisc[disciplinas]' data-pegarcurso='$resultDisc[cursos]' class='btn btn-outline-primary  col-sm-4 pegar' >Alterar </a>
                                                <a href='#' data-idpegari='$resultDisc[id]'  class='btn btn-outline-primary  col-sm-4 pegariliminar' >Iliminar </a>
                                                </td>
                                              </tr>";
                                             }
                             echo"
                                            </tbody>
                                         </table> ";
                            */

     

    
}


//ALTERAR DISCIPLINAS 
if(isset($_POST['btDisciplinaAt'])){

          $disciplina = $_POST['inputDisciplina'];
          $curso = $_POST['inputCurso'];
          $id = $_POST['idDisciplina'];
          $banco = "UPDATE tbdisciplinas SET disciplinas = '$disciplina' , cursos='$curso' WHERE id = '$id'";
          mysqli_query($conexao,$banco);
         
        
   

       $dadosDisc ="SELECT *FROM tbdisciplinas"; 
                             $resultadoDisc = mysqli_query($conexao,$dadosDisc);
                             echo json_encode( $resultadoDisc);
                             /*
                             $n = 0;  



                                  
                                echo "
                                      <table class='table table-striped'>
                                           <thead>
                                              <tr>
                                                <th scope='col'>N</th>
                                                <th scope='col'>Id</th>
                                                <th scope='col'>Disciplinas</th>
                                                <th scope='col'>Cursos</th>
                                                <th>Botao</th>
                                               </tr>
                                           </thead>
                                            <tbody>";
                                              while($resultDisc = mysqli_fetch_array($resultadoDisc)){
                                                $n++;
                              echo"             <tr>
                                                <td > $n </td>
                                                <td> $resultDisc[idEscola] </td>
                                                <td>$resultDisc[disciplinas] </td>
                                                <td>$resultDisc[cursos] </td>
                                                <td><a href='#' data-idpegar='$resultDisc[id]' data-pegardisciplina='$resultDisc[disciplinas]' data-pegarcurso='$resultDisc[cursos]' class='btn btn-outline-primary  col-sm-4 pegar' >Alterar </a>
                                                <a href='#' data-idpegari='$resultDisc[id]'  class='btn btn-outline-primary  col-sm-4 pegariliminar' >Iliminar </a>
                                                </td>
                                              </tr>";
                                             }
                             echo"
                                            </tbody>
                                         </table> "; */
                            

     

    
}





//ILIMINAR DISCIPLINAS
if(isset($_POST['btIlimtDisc'])){

        
    $id = $_POST['idDisc'];
    $banco = "DELETE FROM tbdisciplinas WHERE id = '$id'";
    mysqli_query($conexao,$banco);


      $dadosDisc ="SELECT *FROM tbdisciplinas"; 
                            while( $resultadoDisc = mysqli_query($conexao,$dadosDisc)){
                             echo json_encode( $resultadoDisc);
                            }
                             /*
                             $n = 0;  



                                  
                                echo "
                                      <table class='table table-striped'>
                                           <thead>
                                              <tr>
                                                <th scope='col'>N</th>
                                                <th scope='col'>Id</th>
                                                <th scope='col'>Disciplinas</th>
                                                <th scope='col'>Cursos</th>
                                                <th>Botao</th>
                                               </tr>
                                           </thead>
                                            <tbody>";
                                              while($resultDisc = mysqli_fetch_array($resultadoDisc)){
                                                $n++;
                              echo"             <tr>
                                                <td > $n </td>
                                                <td> $resultDisc[idEscola] </td>
                                                <td>$resultDisc[disciplinas] </td>
                                                <td>$resultDisc[cursos] </td>
                                                <td><a href='#' data-idpegar='$resultDisc[id]' data-pegardisciplina='$resultDisc[disciplinas]' data-pegarcurso='$resultDisc[cursos]' class='btn btn-outline-primary  col-sm-4 pegar' >Alterar </a>
                                                <a href='#' data-idpegari='$resultDisc[id]'  class='btn btn-outline-primary  col-sm-4 pegariliminar' >Iliminar </a>
                                                </td>
                                              </tr>";
                                             }
                             echo"
                                            </tbody>
                                         </table> "; */
                            
        
} 
?>