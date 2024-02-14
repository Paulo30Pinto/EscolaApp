<!DOCTYPE html>
<html lang="pt">
    <?php $conexao = mysqli_connect("localhost","root","","escolaprovincia"); 
       
       $banco = "SELECT *FROM professores WHERE idProfessor = '$_GET[idProfessor]'";
       $dados = mysqli_query($conexao,$banco);
       $resultado = mysqli_fetch_array($dados);
    
    ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="bibliotecas/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bibliotecas/chart.js"></script>
    <script type="text/javascript" src="js/RequisicaoLogin.js"></script>
    <script type="text/javascript" src="js/PerfilProfessor.js"></script>

    <link rel="stylesheet" href="css/PerfilAluno.css ">
    <script src="bibliotecas/bootstrap.min.js "></script>

    <link rel="stylesheet " href="bibliotecas/bootstrap.min.css ">

    <title>Perfil do Professor</title>
<style>
    #inputFile{
     /*   border: 2px solid white;
        background: url("imagemExp/botao-enviar.png") no-repeat;
        background-size: 100% 100%; */
    }
</style>

</head>

<body>

    <div class="container-fluid " id="principal">

        <!-- MENU LATERAL-->
        <input type="hidden" id="idPrincipal" value="<?php echo $_GET['idProfessor']; ?>">

        <div class="flex-column flex-shrink-0 p-2 text-white bg-dark " style="width: 300px" id="menu">

            <div class="image">
                <img src="imagem/fotoEscola/fotoProfessores/<?php echo $resultado['fotoProfe'];?> " alt="" />
            </div>
            <div class="contem">
                <h4 id="nomeProfeChat"><?php echo $resultado['nomeProfessor'];?></h4>

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
                        Add Notas
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

            <div id="social" class="container">
                <ul class="d-flex justify-content-center py-1 px-5">
                    <li>
                        <a href="#"><i class="fa fa-facebook"><img src="IMG\loading (2).gif" alt="Planos de Aulas" ></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"><img src="IMG\loading (2).gif" alt="Planos de Aulas" ></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin"><img src="IMG\loading (2).gif" alt="Planos de Aulas" ></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-dribbble"><img src="IMG\loading (2).gif" alt="Planos de Aulas" ></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-rss"><img src="IMG\loading (2).gif" alt="Planos de Aulas" ></i></a>
                    </li>
                </ul>
            </div>

            <hr>
            <?php 
            $bancoEsc = "SELECT *FROM escolas";
            $dadosEsc = mysqli_query($conexao,$bancoEsc);
            $resultadoEsc = mysqli_fetch_array($dadosEsc);

            ?>

            <div class="copyright">
                <p><?php echo $resultadoEsc['nome'];?></p>
                <button class="btn btn-primary btn-sm" id="btTerminar" onclick="BtTerminar()">Terminar</button>
            </div>

        </div>


        <!--DIV VITRINE-->

        <div class="col-md-10 mx-auto col-lg-10">

            <!--FORM VITRINE -->
            <form id="formVitrine" hidden>
                <div class="col-auto" id="divBt">

                    <button class="btn-close" type="button" aria-label="Close" id="Close1" onclick="CloseVitrine()"> </button>

                </div>
                <h2>Vitrine Principal</h2>
                <div class="container">

                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="imagem/fotoEscola/<?php echo $resultadoEsc['img1'];?>" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="imagem/fotoEscola/<?php echo $resultadoEsc['img2'];?>" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="imagem/fotoEscola/<?php echo $resultadoEsc['img3'];?>" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="imagem/fotoEscola/<?php echo $resultadoEsc['img4'];?>" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="imagem/fotoEscola/<?php echo $resultadoEsc['img5'];?>" class="d-block w-100" alt="...">
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

        <?php 
        $bancoDisc = "SELECT *FROM disciplinas WHERE idDisciplina = '2019'";
        
        ?>
        <div class="col-md-10 mx-auto col-lg-12" id="divNota">
            <form id="formNota" hidden>
                <div class="col-auto" id="divBt">

                    <button class="btn-close" type="button" aria-label="Close" id="Close1" onclick="CloseNota()"> </button>

                </div>
                <h2>Situação das Notas de Matematica</h2>
                <div class="table-responsive " id="formScrol">

                    <table class="table table-bordered table-hover table-striped table-light">
                        <tr class="table table-dark  table-bordered ">
                            <th rowspan="2">N</th>
                            <th rowspan="2">Id</th>
                            <th rowspan="2">Nome</th>
                            <th colspan="6">I Trimestre</th>
                            <th colspan="6">II Trimestre</th>
                            <th colspan="6">III Trimestre</th>
                            <th rowspan="2">MF</th>
                        </tr>

                        <tr class="table table-dark  table-bordered ">
                            <td>MAC</td>
                            <td>NPP</td>
                            <td>NPT</td>
                            <td>MT</td>
                            <td>Faltas</td>
                            <td>Comp</td>
                            <td>MAC</td>
                            <td>NPP</td>
                            <td>NPT</td>
                            <td>MT</td>
                            <td>Faltas</td>
                            <td>Comp</td>
                            <td>MAC</td>
                            <td>NPP</td>
                            <td>NPT</td>
                            <td>MT</td>
                            <td>Faltas</td>
                            <td>Comp</td>


                        </tr>

                        <tr style="color: blue;">
                            <th style="color: black;">1</th>
                            <th style="color: black;">20213423</th>
                            <td id="tdDisciplina" style="color: black;">Celestino Fragoso</td>
                            <td>11</td>
                            <td>13</td>
                            <td>11</td>
                            <td>11.7</td>
                            <td style="color: rgb(0, 255, 234)">5</td>
                            <td style="color: lime">Bom</td>
                            <td>14</td>
                            <td style="color: red;">8</td>
                            <td>13</td>
                            <td>11.7</td>
                            <td style="color: rgb(0, 255, 234)">5</td>
                            <td style="color: lime">Bom</td>
                            <td style="color: red;">7</td>
                            <td>10</td>
                            <td style="color: red;">6</td>
                            <td style="color: red;">7.7</td>
                            <td style="color: rgb(0, 255, 234)">5</td>
                            <td style="color: lime">Bom</td>
                            <td>10.7</td>

                        </tr>

                        <tr style="color: blue;">
                            <th style="color: black;">2</th>
                            <th style="color: black;">20213423</th>
                            <td id="tdDisciplina" style="color: black;">Paulo Bunga</td>
                            <td>11</td>
                            <td>13</td>
                            <td>11</td>
                            <td>11.7</td>
                            <td style="color: rgb(0, 255, 234)">5</td>
                            <td style="color: lime">Bom</td>
                            <td>14</td>
                            <td style="color: red;">8</td>
                            <td>13</td>
                            <td>11.7</td>
                            <td style="color: rgb(0, 255, 234)">5</td>
                            <td style="color: lime">Bom</td>
                            <td style="color: red;">7</td>
                            <td>10</td>
                            <td style="color: red;">6</td>
                            <td style="color: red;">7.7</td>
                            <td style="color: rgb(0, 255, 234)">5</td>
                            <td style="color: lime">Bom</td>
                            <td>10.7</td>

                        </tr>

                        <tr style="color: blue;">
                            <th style="color: black;">3</th>
                            <th style="color: black;">20213423</th>
                            <td id="tdDisciplina" style="color: black;">Nadia Ebo</td>
                            <td>11</td>
                            <td>13</td>
                            <td>11</td>
                            <td>11.7</td>
                            <td style="color: rgb(0, 255, 234)">5</td>
                            <td style="color: lime">Bom</td>
                            <td>14</td>
                            <td style="color: red;">8</td>
                            <td>13</td>
                            <td>11.7</td>
                            <td style="color: rgb(0, 255, 234)">5</td>
                            <td style="color: lime">Bom</td>
                            <td style="color: red;">7</td>
                            <td>10</td>
                            <td style="color: red;">6</td>
                            <td style="color: red;">7.7</td>
                            <td style="color: rgb(0, 255, 234)">5</td>
                            <td style="color: lime">Bom</td>
                            <td>10.7</td>

                        </tr>

                        <tr style="color: blue;">
                            <th style="color: black;">4</th>
                            <th style="color: black;">20213423</th>
                            <td id="tdDisciplina" style="color: black;">Paulino Jose</td>
                            <td>11</td>
                            <td>13</td>
                            <td>11</td>
                            <td>11.7</td>
                            <td style="color: rgb(0, 255, 234)">5</td>
                            <td style="color: lime">Bom</td>
                            <td>14</td>
                            <td style="color: red;">8</td>
                            <td>13</td>
                            <td>11.7</td>
                            <td style="color: rgb(0, 255, 234)">5</td>
                            <td style="color: lime">Bom</td>
                            <td style="color: red;">7</td>
                            <td>10</td>
                            <td style="color: red;">6</td>
                            <td style="color: red;">7.7</td>
                            <td style="color: rgb(0, 255, 234)">5</td>
                            <td style="color: lime">Bom</td>
                            <td>10.7</td>

                        </tr>

                        <tr style="color: blue;">
                            <th style="color: black;">5</th>
                            <th style="color: black;">20213423</th>
                            <td id="tdDisciplina" style="color: black;">Priscila Alves</td>
                            <td>11</td>
                            <td>13</td>
                            <td>11</td>
                            <td>11.7</td>
                            <td style="color: rgb(0, 255, 234)">5</td>
                            <td style="color: lime">Bom</td>
                            <td>14</td>
                            <td style="color: red;">8</td>
                            <td>13</td>
                            <td>11.7</td>
                            <td style="color: rgb(0, 255, 234)">5</td>
                            <td style="color: lime">Bom</td>
                            <td style="color: red;">7</td>
                            <td>10</td>
                            <td style="color: red;">6</td>
                            <td style="color: red;">7.7</td>
                            <td style="color: rgb(0, 255, 234)">5</td>
                            <td style="color: lime">Bom</td>
                            <td>10.7</td>

                        </tr>

                        <tr style="color: blue;">
                            <th style="color: black;">6</th>
                            <th style="color: black;">20213423</th>
                            <td id="tdDisciplina" style="color: black;">Adilson Raimundo</td>
                            <td>11</td>
                            <td>13</td>
                            <td>11</td>
                            <td>11.7</td>
                            <td style="color: rgb(0, 255, 234)">5</td>
                            <td style="color: lime">Bom</td>
                            <td>14</td>
                            <td style="color: red;">8</td>
                            <td>13</td>
                            <td>11.7</td>
                            <td style="color: rgb(0, 255, 234)">5</td>
                            <td style="color: lime">Bom</td>
                            <td style="color: red;">7</td>
                            <td>10</td>
                            <td style="color: red;">6</td>
                            <td style="color: red;">7.7</td>
                            <td style="color: rgb(0, 255, 234)">5</td>
                            <td style="color: lime">Bom</td>
                            <td>10.7</td>

                        </tr>

                        <tr style="color: blue;">
                            <th style="color: black;">7</th>
                            <th style="color: black;">20213423</th>
                            <td id="tdDisciplina" style="color: black;">Jandira Fragoso</td>
                            <td>11</td>
                            <td>13</td>
                            <td>11</td>
                            <td>11.7</td>
                            <td style="color: rgb(0, 255, 234)">5</td>
                            <td style="color: lime">Bom</td>
                            <td>14</td>
                            <td style="color: red;">8</td>
                            <td>13</td>
                            <td>11.7</td>
                            <td style="color: rgb(0, 255, 234)">5</td>
                            <td style="color: lime">Bom</td>
                            <td style="color: red;">7</td>
                            <td>10</td>
                            <td style="color: red;">6</td>
                            <td style="color: red;">7.7</td>
                            <td style="color: rgb(0, 255, 234)">5</td>
                            <td style="color: lime">Bom</td>
                            <td>10.7</td>

                        </tr>

                        <tr style="color: blue;">
                            <th style="color: black;">8</th>
                            <th style="color: black;">20213423</th>
                            <td id="tdDisciplina" style="color: black;">Mauro Andre</td>
                            <td>11</td>
                            <td>13</td>
                            <td>11</td>
                            <td>11.7</td>
                            <td style="color: rgb(0, 255, 234)">5</td>
                            <td style="color: lime">Bom</td>
                            <td>14</td>
                            <td style="color: red;">8</td>
                            <td>13</td>
                            <td>11.7</td>
                            <td style="color: rgb(0, 255, 234)">5</td>
                            <td style="color: lime">Bom</td>
                            <td style="color: red;">7</td>
                            <td>10</td>
                            <td style="color: red;">6</td>
                            <td style="color: red;">7.7</td>
                            <td style="color: rgb(0, 255, 234)">5</td>
                            <td style="color: lime">Bom</td>
                            <td>10.7</td>

                        </tr>

                        <tr style="color: blue;">
                            <th style="color: black;">9</th>
                            <th style="color: black;">20213423</th>
                            <td id="tdDisciplina" style="color: black;">Belmira Anastacio</td>
                            <td>11</td>
                            <td>13</td>
                            <td>11</td>
                            <td>11.7</td>
                            <td style="color: rgb(0, 255, 234)">5</td>
                            <td style="color: lime">Bom</td>
                            <td>14</td>
                            <td style="color: red;">8</td>
                            <td>13</td>
                            <td>11.7</td>
                            <td style="color: rgb(0, 255, 234)">5</td>
                            <td style="color: lime">Bom</td>
                            <td style="color: red;">7</td>
                            <td>10</td>
                            <td style="color: red;">6</td>
                            <td style="color: red;">7.7</td>
                            <td style="color: rgb(0, 255, 234)">5</td>
                            <td style="color: lime">Bom</td>
                            <td>10.7</td>

                        </tr>

                        <tr style="color: blue;">
                            <th style="color: black;">10</th>
                            <th style="color: black;">20213423</th>
                            <td id="tdDisciplina" style="color: black;">Nilton Dala</td>
                            <td>11</td>
                            <td>13</td>
                            <td>11</td>
                            <td>11.7</td>
                            <td style="color: rgb(0, 255, 234)">5</td>
                            <td style="color: lime">Bom</td>
                            <td>14</td>
                            <td style="color: red;">8</td>
                            <td>13</td>
                            <td>11.7</td>
                            <td style="color: rgb(0, 255, 234)">5</td>
                            <td style="color: lime">Bom</td>
                            <td style="color: red;">7</td>
                            <td>10</td>
                            <td style="color: red;">6</td>
                            <td style="color: red;">7.7</td>
                            <td style="color: rgb(0, 255, 234)">5</td>
                            <td style="color: lime">Bom</td>
                            <td>10.7</td>

                        </tr>


                    </table>
                </div>

            </form>
        </div>



        <!-- FORM DENUNCIA-->

        <div class="col-md-10 mx-auto col-lg-10" id="divDenuncia">


            <!-- DENUNCIAS PROFESSORES-->



            <!-- FORM CHAT -->

            <form id="formChat" hidden>
                <div class="col-auto" id="divBt">

                    <button class="btn-close" type="button" aria-label="Close" id="Close1" onclick="CloseChat()"> </button>

                </div>
                <h2>Chat Turma</h2>
                <div id="formScrol">

                    <ul class="nav nav-pills flex-column mb-auto" id="main-menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white linkDirecao" aria-current="page" onclick="FormChat()">
                                             Conversar com a direção da Escola
                                    </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white" aria-current="page" onclick="FormChat()">
                                     Conversar com a Turma
                            </a>
                        </li>

                    </ul>
                </div>

            </form>

            <!-- CHAT-->

            <form id="formChat1" hidden>
                <div class="col-auto" id="divBt">

                    <button class="btn-close" type="button" aria-label="Close" id="Close1" onclick="CloseFormChat()"> </button>

                </div>
                <h2>Chat Turma</h2>
                <div  >
                    <div id="history">
                      
                      <div id="mostraChatProfe"></div>
                      
                      
                      </div>
                    
                    
                    <hr><br><br><br>
                    <div class="d-flex justify-content" id="outro">
                        <div class="form mb-2 col-sm-5">
                            <textarea class="form-control" name="" id="textoProfe" cols="20" rows="1"></textarea>
                           
                            <input class="btn btn-primary" type="image" src="imagemExp/botao-enviar.png" id="bbProfe" alt=""><br><br>

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
                <h2>Alterar Pefil</h2>
                <div class="alt" id="formScrol">
                    <br>
                    <form enctype="multipart/form-data" id="formFotoPerfil1">
                    <h3>Carregar Foto de Perfil</h3>
                    <div class="d-flex form-floating mb-3 col-sm-10">
                         <input type="hidden" name="hideFotoPerfil1" value="<?php echo $_GET['idProfessor']; ?>">
                        <input type="file" class="form-control form-control" name="inputFotoPerfil1" aria-label="Large file input" >
                        <label for="floatingInput">Alterar Foto Perfil</label>
                        <button type="submit" class="btn btn-primary">Confirmar</button>

                    </div>
                    </form>


                    <br>

                    <form enctype="multipart/form-data" id="formFotoDoc1">
                    <h3>Carregar Documentos</h3>
                    <div class="d-flex form-floating mb-3 col-sm-10">
                        <input type="hidden" name="inputFotoDoc1" value="<?php echo $_GET['idProfessor']; ?>">
                        <input type="file" class="form-control form-control-lg" aria-label="Large file input">
                        <label for="floatingInput">Alterar Documentos</label>
                        <button type="submit" class="btn btn-primary">Confirmar</button>

                    </div>
                    </form>


                    <br>
                    <div class="form-floating mb-3 col-sm-6">
                    <input type="hidden" id="inputIdPerfil1" value="<?php echo $_GET['idProfessor']; ?>">
                    <input type="hidden"  id="inputPass1"  value="<?php echo $resultado['passProfe'];?>">
                        <input type="password" class="form-control" id="inputPerfilProfe" placeholder="Senha Antiga">
                        <label for="floatingInput">Senha Antiga</label><br>
                    </div>
                    <div class="form-floating mb-3 col-sm-6">
                        <input type="password" class="form-control" id="inputPerfilProfe1" placeholder="Senha Nova">
                        <label for="floatingInput">Senha Nova</label><br>
                        <button class="btn btn-primary" id="btPerfil1">Confirmar</button>
                    </div>
                    <br>


                </div>
            </div>

        </div>

        <h1 id="sco">SchoCia</h1>
    </div>


</body>

</html>