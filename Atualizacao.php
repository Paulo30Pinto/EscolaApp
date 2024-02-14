 

<?php

$conexao = mysqli_connect("localhost","root","","escola");


                             $dadosDisc ="SELECT *FROM tbdisciplinas"; 
                             $resultadoDisc = mysqli_query($conexao,$dadosDisc);
                            // $resultDisc = mysqli_fetch_array($resultadoDisc);
                            while ($resultDisc = mysqli_fetch_array($resultadoDisc)){
                             echo $resultDisc['disciplinas']."<br>";
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
                                                <td><a href='#' data-idpegar='$resultDisc[id]' data-pegardisciplina='$resultDisc[disciplinas]' data-pegardisciplina='$resultDisc[cursos]' class='btn btn-outline-primary  col-sm-4 pegar' >Alterar </a>
                                                <a href='#' data-idpegari='$resultDisc[id]'  class='btn btn-outline-primary  col-sm-4 pegariliminar' >Iliminar </a>
                                                </td>
                                              </tr>";
                                             }
                             echo"
                                            </tbody>
                                         </table> ";*/
                            
?>