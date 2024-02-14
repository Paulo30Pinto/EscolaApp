<!DOCTYPE html>
<html lang="pt">
<?php 

/*$conexao= mysqli_connect("localhost","root","","escolaprovincia"); */


?>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="bibliotecas/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/PerfilAluno.js"></script>
    <script type="text/javascript" src="js/RequisicaoLogin.js"></script>
    <script type="text/javascript" src="bibliotecas/chart.js"></script>
    

    <link rel="stylesheet" href="css/PerfilAluno.css">
    <script src="bibliotecas/bootstrap.min.js "></script>

    <link rel="stylesheet " href="bibliotecas/fontawesome.css">
    <link rel="stylesheet " href="bibliotecas/bootstrap.min.css ">

    <title>Perfil Aluno</title>


</head>

<body>
            <?php 
/*               $banco = "SELECT *FROM escolas";
               $dados = mysqli_query($conexao,$banco);  
               $resultado = mysqli_fetch_array($dados);
*/
            ?>

    <div class="container-fluid" id="principal">

            <?php 
            /*
               $banco1 = "SELECT *FROM alunos where idAluno = '$_GET[idAluno]'";
               $dados1 = mysqli_query($conexao,$banco1);  
               $resultado1 = mysqli_fetch_array($dados1);
*/
              ?>

        <!-- MENU LATERAL-->

        <div class="flex-column flex-shrink-0 p-2 text-white bg-dark" style="width: 300px" id="menu">
        <input type="hidden" id="idPrincipal" value="<?php/* echo $_GET['idAluno']; */?>">
            <div class="image">
                <img src="imagens/meio_corpo1.png">
            </div>
            <div class="contem">
                <h4 id="nomeAlunoChat">Paulo Bunga</h4>
                <span class="fs-4">12ª Classe</span>
            </div>

            <br>

            <ul class="nav nav-pills flex-column mb-auto" id="main-menu">
                <li class="nav-item">
                    <button class="nav-link text-white" aria-current="page" onclick="Vitrine()">
                             Vitrine
                    </button>
                </li>
                <li>
                    <button class="nav-link text-white" onclick="Nota()">
                        Ver Notas
                    </button>
                </li>
                <li>
                    <button class="nav-link text-white" onclick="Propina()">
                        Ver Propina
                    </button>
                </li>
                <li>
                    <button class="nav-link text-white" onclick="Denuncia()">
                        Denuciar Professor
                    </button>
                </li>
                <li>
                    <button class="nav-link text-white" onclick="Chat()">
                        Chat Turma
                    </button>
                </li>
                <li>
                    <button class="nav-link text-white" onclick="AlterarPerfil()">
                        Alterar Perfil
                    </button>
                </li>
            </ul>

            <div id="social" class="container py-1">
                <ul class="d-flex justify-content-center py-1 px-5">
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-envelope"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-gamepad"></i></a>
                    </li>
                </ul>
            </div>

            <hr>

            <div class="copyright py-1">
                <p><?php/* echo $resultado['nome']; */?></p>
                <button class="btn btn-primary btn-sm" id="btTerminar" onclick="BtTerminar()">Terminar</button>
            </div>

        </div>


        <!--DIV VITRINE-->

        <div class="col-md-10 mx-auto col-lg-10">
            

            <!--FORM VITRINE -->
            <form id="formVitrine" class="">
                <div class="col-auto" id="divBt">

                    <button class="btn-close" type="button" aria-label="Close" id="Close1" onclick="CloseVitrine()"> </button>

                </div>
                <h2>Vitrine Principal</h2>
                <div class="container">

                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="imagem/fotoEscola/<?php/* echo $resultado['img1'] */?>" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="imagem/fotoEscola/<?php/* echo $resultado['img2'] */?>" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="imagem/fotoEscola/<?php/* echo $resultado['img3'] */?>" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="imagem/fotoEscola/<?php/* echo $resultado['img4'] */?>" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="imagem/fotoEscola/<?php/* echo $resultado['img5'] */?>" class="d-block w-100" alt="...">
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

        </div>

        <!--TABELA NOTAS-->


        <div class="col-md-10 mx-auto col-lg-10" id="divNota">
            <form id="formNota" hidden>
                <div class="col-auto" id="divBt">

                    <button class="btn-close" type="button" aria-label="Close" id="Close1" onclick="CloseNota()"> </button>

                </div>
                <h2>Situação das Notas</h2>
                <div class="table-responsive " id="formScrol">

                    <table class="table table-bordered table-hover table-striped table-light">
                        <tr class="table table-dark  table-bordered ">
                            <th rowspan="2">Disciplinas</th>
                            <th colspan="4">I Trimestre</th>
                            <th colspan="4">II Trimestre</th>
                            <th colspan="4">III Trimestre</th>
                            <th rowspan="2">MF</th>
                        </tr>

                        <tr>
                            <td>MAC</td>
                            <td>NPP</td>
                            <td>NPT</td>
                            <td>MT</td>
                            <td>MAC</td>
                            <td>NPP</td>
                            <td>NPT</td>
                            <td>MT</td>
                            <td>MAC</td>
                            <td>NPP</td>
                            <td>NPT</td>
                            <td>MT</td>

                        </tr>

                        <tr style="color: blue;">
                            <td id="tdDisciplina" style="color: black;">Matematica</td>
                            <td>11</td>
                            <td>13</td>
                            <td>11</td>
                            <td>11.7</td>
                            <td>14</td>
                            <td style="color: red;">8</td>
                            <td>13</td>
                            <td>11.7</td>
                            <td style="color: red;">7</td>
                            <td>10</td>
                            <td style="color: red;">6</td>
                            <td style="color: red;">7.7</td>
                            <td>10.7</td>

                        </tr>

                        <tr style="color: blue;">
                            <td id="tdDisciplina" style="color: black;">L.Portuguesa</td>
                            <td>11</td>
                            <td>13</td>
                            <td>11</td>
                            <td>11.7</td>
                            <td>14</td>
                            <td style="color: red;">8</td>
                            <td>13</td>
                            <td>11.7</td>
                            <td style="color: red;">7</td>
                            <td>10</td>
                            <td style="color: red;">6</td>
                            <td style="color: red;">7.7</td>
                            <td>10.7</td>

                        </tr>

                        <tr style="color: blue;">
                            <td id="tdDisciplina" style="color: black;">Fisica</td>
                            <td>11</td>
                            <td>13</td>
                            <td>11</td>
                            <td>11.7</td>
                            <td>14</td>
                            <td style="color: red;">8</td>
                            <td>13</td>
                            <td>11.7</td>
                            <td style="color: red;">7</td>
                            <td>10</td>
                            <td style="color: red;">6</td>
                            <td style="color: red;">7.7</td>
                            <td>10.7</td>

                        </tr>

                        <tr style="color: blue;">
                            <td id="tdDisciplina" style="color: black;">Biologia</td>
                            <td>11</td>
                            <td>13</td>
                            <td>11</td>
                            <td>11.7</td>
                            <td>14</td>
                            <td style="color: red;">8</td>
                            <td>13</td>
                            <td>11.7</td>
                            <td style="color: red;">7</td>
                            <td>10</td>
                            <td style="color: red;">6</td>
                            <td style="color: red;">7.7</td>
                            <td>10.7</td>

                        </tr>

                        <tr style="color: blue;">
                            <td id="tdDisciplina" style="color: black;">Historia</td>
                            <td>11</td>
                            <td>13</td>
                            <td>11</td>
                            <td>11.7</td>
                            <td>14</td>
                            <td style="color: red;">8</td>
                            <td>13</td>
                            <td>11.7</td>
                            <td style="color: red;">7</td>
                            <td>10</td>
                            <td style="color: red;">6</td>
                            <td style="color: red;">7.7</td>
                            <td>10.7</td>

                        </tr>

                        <tr style="color: blue;">
                            <td id="tdDisciplina" style="color: black;">L.Estrangeira</td>
                            <td>11</td>
                            <td>13</td>
                            <td>11</td>
                            <td>11.7</td>
                            <td>14</td>
                            <td style="color: red;">8</td>
                            <td>13</td>
                            <td>11.7</td>
                            <td style="color: red;">7</td>
                            <td>10</td>
                            <td style="color: red;">6</td>
                            <td style="color: red;">7.7</td>
                            <td>10.7</td>

                        </tr>

                        <tr style="color: blue;">
                            <td id="tdDisciplina" style="color: black;">Quimica</td>
                            <td>11</td>
                            <td>13</td>
                            <td>11</td>
                            <td>11.7</td>
                            <td>14</td>
                            <td style="color: red;">8</td>
                            <td>13</td>
                            <td>11.7</td>
                            <td style="color: red;">7</td>
                            <td>10</td>
                            <td style="color: red;">6</td>
                            <td style="color: red;">7.7</td>
                            <td>10.7</td>

                        </tr>

                        <tr style="color: blue;">
                            <td id="tdDisciplina" style="color: black;">Geografia</td>
                            <td>11</td>
                            <td>13</td>
                            <td>11</td>
                            <td>11.7</td>
                            <td>14</td>
                            <td style="color: red;">8</td>
                            <td>13</td>
                            <td>11.7</td>
                            <td style="color: red;">7</td>
                            <td>10</td>
                            <td style="color: red;">6</td>
                            <td style="color: red;">7.7</td>
                            <td>10.7</td>

                        </tr>

                        <tr style="color: blue;">
                            <td id="tdDisciplina" style="color: black;">Economia</td>
                            <td>11</td>
                            <td>13</td>
                            <td>11</td>
                            <td>11.7</td>
                            <td>14</td>
                            <td style="color: red;">8</td>
                            <td>13</td>
                            <td>11.7</td>
                            <td style="color: red;">7</td>
                            <td>10</td>
                            <td style="color: red;">6</td>
                            <td style="color: red;">7.7</td>
                            <td>10.7</td>

                        </tr>

                        <tr style="color: blue;">
                            <td id="tdDisciplina" style="color: black;">I.Direito</td>
                            <td>11</td>
                            <td>13</td>
                            <td>11</td>
                            <td>11.7</td>
                            <td>14</td>
                            <td style="color: red;">8</td>
                            <td>13</td>
                            <td>11.7</td>
                            <td style="color: red;">7</td>
                            <td>10</td>
                            <td style="color: red;">6</td>
                            <td style="color: red;">7.7</td>
                            <td>10.7</td>

                        </tr>
                        <tr style="color: blue;">
                            <td id="tdDisciplina" style="color: black;">Comportamento</td>
                            <td colspan="4">Bom</td>
                            <td colspan="4">Bom</td>
                            <td colspan="4">Bom</td>
                            <td>v</td>

                        </tr>
                        <tr style="color: blue;">
                            <td id="tdDisciplina" style="color: black;">Total de Faltas</td>
                            <td colspan="4">4</td>
                            <td colspan="4">9</td>
                            <td colspan="4">0</td>
                            <td>v</td>

                        </tr>

                    </table>
                </div>

            </form>
        </div>

        <!-- TABELA DA PROPINA-->
        <div class="col-md-10 mx-auto col-lg-10" id="divPropina">
            <form id="formPropina" hidden>
                <div class="col-auto" id="divBt">

                    <button class="btn-close" type="button" aria-label="Close" id="Close1" onclick="ClosePropina()"> </button>

                </div>
                <h2>Situação Financeira</h2>
                <div class="table-responsive" id="formScrol1">

                    <table class="table table-bordered table-hover table-striped table-light">
                        <tr class="table table-dark  table-bordered ">
                            <th>Mes</th>
                            <th>Valor Pago</th>
                            <th>Valor Multa</th>
                            <th>Total Pago</th>
                        </tr>

                        <tr>
                            <td>Janeiro</td>
                            <td>Pago</td>
                            <td>0</td>
                            <td>10.000kzs</td>
                        </tr>

                        <tr>
                            <td>fevereiro</td>
                            <td>Pago</td>
                            <td>0</td>
                            <td>10.000kzs</td>
                        </tr>
                        <tr>
                            <td>Março</td>
                            <td>Pago</td>
                            <td>0</td>
                            <td>10.000kzs</td>
                        </tr>
                        <tr>
                            <td>Abril</td>
                            <td>Pago</td>
                            <td>0</td>
                            <td>10.000kzs</td>
                        </tr>
                        <tr>
                            <td>Maio</td>
                            <td>Pago</td>
                            <td>0</td>
                            <td>10.000kzs</td>
                        </tr>
                        <tr>
                            <td>Junho</td>
                            <td>Pago</td>
                            <td>0</td>
                            <td>10.000kzs</td>
                        </tr>
                        <tr>
                            <td>Julho</td>
                            <td>Pago</td>
                            <td>0</td>
                            <td>10.000kzs</td>
                        </tr>
                        <tr>
                            <td>Agosto</td>
                            <td>Pago</td>
                            <td>0</td>
                            <td>10.000kzs</td>
                        </tr>
                        <tr>
                            <td>Setembro</td>
                            <td>Pago</td>
                            <td>0</td>
                            <td>10.000kzs</td>
                        </tr>
                        <tr>
                            <td>Outubro</td>
                            <td>Pago</td>
                            <td>0</td>
                            <td>10.000kzs</td>
                        </tr>
                        <tr>
                            <td>Novembro</td>
                            <td>Pago</td>
                            <td>0</td>
                            <td>10.000kzs</td>
                        </tr>
                        <tr>
                            <td>Dezembro</td>
                            <td>Pago</td>
                            <td>0</td>
                            <td>10.000kzs</td>
                        </tr>

                    </table>
                </div>

            </form>
        </div>
        <?php 
      /*  $bancoDisc = "SELECT *FROM disciplinas";
        $dadosDisc = mysqli_query($conexao,$bancoDisc);
*/
        ?>

        <!-- FORM DENUNCIA-->

        <div class="col-md-10 mx-auto col-lg-10 container" id="divDenuncia">
            <form id="formDenuncia" class="container" hidden>
                <div class="col-auto container-fluid" id="divBt">

                    <button class="btn-close" type="button" aria-label="Close" id="Close1" onclick="CloseDenuncia()"> </button>

                </div>
                <h2>Denunciar Professores</h2>
                <div id="formScrol">

                    <ul class="nav nav-pills flex-column mb-auto" id="main-menu">
                        <?php while($resultadoDisc = mysqli_fetch_array($dadosDisc)){ ?>   
                        <li class="nav-item">
                            <a href="#" data-iddisc="<?php echo $resultadoDisc['idDisciplina']; ?>" class="nav-link text-white link" aria-current="page"  onclick="DenunciaProf()">
                                 <?php echo $resultadoDisc['disciplina']; ?>
                        </a>
                        </li>
                        <?php } ?>
                       
                    </ul>
                </div>

            </form>

            <!-- DENUNCIAS PROFESSORES-->

            <form id="formDenunciaProf" hidden>
                <div class="col-auto" id="divBt">

                    <button class="btn-close" type="button" aria-label="Close" id="Close1" onclick="CloseDenunciaProf()"> </button>

                </div>

                <div id="formScrol">
                 <div id="mostraTotal">
                   
                 </div>
                    <br>
                    <hr>


                       <input type="hidden" id="hideDisc">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="chek1">
                        <label class="form-check-label" for="flexCheckDefault"> 
                                -PROFESSOR(A) É FALTOSO(A) OU NÃO É PONTUAL
                              </label>

                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="chek2">
                        <label class="form-check-label" for="flexCheckChecked">
                                -PROFESSOR(A) É AUTORITÁRIO(A)
                                </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="chek3">
                        <label class="form-check-label" for="flexCheckDefault"> 
                                    -PROFESSOR(A) NÃO TEM BOA COMUNICAÇÃO
                                  </label>

                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="chek4">
                        <label class="form-check-label" for="flexCheckChecked">
                                    -PROFESSOR(A) NÃO TEM DOMÍNIO DA MATÉRIA
                                    </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="chek5">
                        <label class="form-check-label" for="flexCheckDefault"> 
                                        -PROFESSOR(A) SE APRESENTA MAL
                                      </label>

                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="chek6">
                        <label class="form-check-label" for="flexCheckChecked">
                                        -PROFESSOR(A) ELABORA PROVA COM PERGUNTAS QUE NÃO ENSINOU
                                        </label>
                    </div>


                </div>
                <button class="btn btn-primary" id="btDenuncia">Confirmar</button>

            </form>


            <!-- FORM CHAT -->

            <form id="formChat" hidden>
                <div class="col-auto" id="divBt">

                    <button class="btn-close" type="button" aria-label="Close" id="Close1" onclick="CloseChat()"> </button>

                </div>
                <h2>Chat Turma</h2>
                <div id="formScrol">
                              
                              <?php
                               /* $bancoAlunos = "SELECT *FROM alunos";
                                $dadosAlunos = mysqli_query($conexao,$bancoAlunos);
*/
                              ?>
                    <ul class="nav nav-pills flex-column mb-auto" id="main-menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white" aria-current="page" onclick="FormChat()">
                                             Conversar com Todos da Turma
                                    </a>
                        </li>
                        <?php while($resultadoAluno = mysqli_fetch_array($dadosAlunos)){?>
                        <?php if($resultadoAluno['idAluno']==$_GET['idAluno']){
                              }else{   ?>
                        <li class="nav-item">
                            <a href="#" data-idaluno="<?php echo $resultadoAluno['idAluno'];?>" class="nav-link text-white linkAluno" aria-current="page" onclick="FormChat()">
                                     <?php echo $resultadoAluno['nomeAluno']; ?>
                            </a>
                        </li>
                        <?php }
                                   } ?>
                       
                    </ul>
                </div>

            </form>

            <!-- CHAT-->

            <form id="formChat1" hidden>
                <div class="col-auto" id="divBt">

                    <button class="btn-close" type="button" aria-label="Close" id="Close1" onclick="CloseFormChat()"> </button>

                </div>
            <div>
                <h2>Chat Turma</h2>
                <div id="formScrol">
                    <div id="history">
                      <di id="mostraChatAluno"></div>
                    </div>
                </div>
                     <div class="d-flex justify-content" id="outro">
                        <div class="form mb-2 col-sm-5">
                            <textarea class="form-control" name="" id="texto" cols="20" rows="1"></textarea>
                            <button class="btn btn-primary " ­ type="button" id="bb">Enviar</button>

                        </div>

                    </div>
                    <input type="file" name="" id="inputFile">
            </div>

            </form>

            <!-- ALTERAR PERFIL-->

            <div id="formAlterarPerfil" hidden>
                <div class="col-auto" id="divBt">

                    <button class="btn-close" type="button" aria-label="Close" id="Close1" onclick="CloseAltePerfil()"> </button>

                </div>
                <h2>Alterar Perfil</h2>
                <div class="alt" id="formScrol">
                    
                     <form enctype="multipart/form-data" id="formFotoPerfil">
                    <h3>Carregar Foto de Perfil</h3>
                    <div class="d-flex form-floating mb-3 col-sm-10">
                         <input type="hidden" name="hideFotoPerfil" value="<?php/* echo $_GET['idAluno']; */?>">
                        <input type="file" class="form-control form-control" name="inputFotoPerfil" aria-label="Large file input" >
                        <label for="floatingInput">Alterar Foto Perfil</label>
                        <button type="submit" class="btn btn-primary">Confirmar</button>

                    </div>
                    </form>


                    <br>

                    <form enctype="multipart/form-data" id="formFotoDoc">
                    <h3>Carregar Documentos</h3>
                    <div class="d-flex form-floating mb-3 col-sm-10">
                        <input type="hidden" name="inputFotoDoc" value="<?php/* echo $_GET['idAluno']; */?>">
                        <input type="file" class="form-control form-control-lg" aria-label="Large file input">
                        <label for="floatingInput">Alterar Documentos</label>
                        <button type="submit" class="btn btn-primary">Confirmar</button>

                    </div>
                    </form>
                         <hr>

                    <br>
                    <div class="form-floating mb-3 col-sm-6">
                    <input type="hidden" id="inputIdPerfil" value="<?php/* echo $_GET['idAluno']; */?>">
                    <input type="hidden"  id="inputPass"  value="<?php/* echo $resultado1['passAluno']; */?>">
                        <input type="password" class="form-control" id="inputPerfilAluno" placeholder="Senha Antiga">
                        <label for="floatingInput">Senha Antiga</label><br>
                    </div>
                    <div class="form-floating mb-3 col-sm-6">
                        <input type="password" class="form-control" id="inputPerfilAluno1" placeholder="Senha Nova">
                        <label for="floatingInput">Senha Nova</label><br>
                        <button class="btn btn-primary" id="btPerfil">Confirmar</button>
                    </div>
                    <br>


                    

                    


                </div>
            </div>

        </div>

        <h1 class="" id="sco">SchoCia</h1>
    </div>


</body>

</html>