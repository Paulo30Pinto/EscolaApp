<!DOCTYPE html>
<html lang="pt" id="janela">
<?php 
         $conexao= mysqli_connect("localhost","root","","escola") ;
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="bibliotecas/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/AdmiEscola.js"></script>
    <script type="text/javascript" src="js/requisicaoAdmiEscola.js"></script>
    <link rel="stylesheet" href="css/AdmiEscola.css ">
    <script src="bibliotecas/bootstrap.min.js "></script>
    <link rel="stylesheet " href="bibliotecas/bootstrap.min.css ">
    <script type="text/javascript" src="bibliotecas/chart.js"></script>

    <title>AdmiEscola</title>


</head>

<body>
  
    <!-- MENU -->
    <input id="hidenIdEscola" type="hidden" value="">
    <header id="headerPrincipal">
        <div class="contaneir" id="divPrincipal1"><label id="labelNomeEscola">Nome da Escola</label></div>
        <div class="contaneir " id="divPrincipal2"> <button onclick="janelaPrincipal()">Terminar</button></div>
        <div class="container " id="menu">

            <header class="d-flex justify-content-center py-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><button class="btn btn-primary" id="button1" onclick="Grafico()">Gráfico da Turma</button></li>
                    <li class="nav-item"><button class="btn btn-primary" id="button1" onclick="Vitrine()">Vitrine</button></li>
                    <li class="nav-item"><button class="btn btn-primary" id="button2" onclick="Administrador()">Administrador</button></li>
                    <li class="nav-item"><button class="btn btn-primary" id="button3" onclick="Informacao1()">Informações</button></li>
                    <li class="nav-item"><button class="btn btn-primary" id="button4" onclick="AdNota()">Add Notas</button></li>
                    <li class="nav-item"><button class="btn btn-primary" id="button5" onclick="Menssagem()">Mensangens</button></li>
                </ul>
            </header>
        </div>
    </header>



    <div class="container-fluid " id="principal">


        <div class="container-fluid" id="divCorpo">


            <!--FORM GRAFICO-->
            <form id="formGrafico" hidden>


                <div class="col-auto" id="divBt">
                    <button type="button" class="btn-close" aria-label="Close" id="Close1" onclick="CloseGrafico()"></button>

                </div>
                <div class="container-fluid" id="divGrafico">


                    <div id="divChart">

                        <input type="submit" value="Pesquisar" class="btn btn-primary" id="btPesqGrafic">

                        <div id="divAdNota1" class="d-flex" >
                              <input type="hidden" id="turmaCadaProfe1">
                            <!-- COMUNICAÇÃO COM BASE DE DADOS -->
                            <div class="form-floating mb-1  col-sm-2">
                                  <select id="classeCadaProfe1" class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                                
                                                                <option>1ª Classe</option>
                                                                <option>2ª Classe</option>
                                                                <option>3ª Classe</option>
                                                                <option>4ª Classe</option>
                                                                <option>5ª Classe</option>
                                                                <option>6ª Classe</option>
                                                                <option>7ª Classe</option>
                                                                <option>8ª Classe</option>
                                                                <option>9ª Classe</option>
                                                                <option>10ª Classe</option>
                                                                <option>11ª Classe</option>
                                                                <option>12ª Classe</option>
                                                                <option>13ª Classe</option>
                                                
                                                </select>
                                                 <label for="floatingInput">Classe</label>
                            </div>
                            <div class="form-floating mb-1  col-sm-2">

                                  <select id="turnoCadaProfe1" class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                                 
                                                 <option >Manhã</option>
                                                 <option >Tarde</option>
                                                 <option >Noite</option>
                                              </select>
                                              <label for="floatingInput">Turno</label>
                            </div>
                                             



                        </div>
                        <div class="container" id="graficoScrol">
                              <div id="mostraGraficoTurma">

                                  
                              </div>
                           <!-- <a class="linkLuanda" onclick="BtCadaTurma()" href="#">Ver</a> -->
                        </div>
                    </div>
                </div>

            </form>

            <!-- FORM ESTATISCA DE CADA TURMA-->
            <form id="formCadaTurma" hidden >

                <div class='container-fluid' id='divPrincipal11'>
                    <div class='col-auto' id='divBt'>
                        <button type='button' class='btn-close' aria-label='Close' id='Close1' onclick='CloseCadaTurma()'></button>

                    </div>
                      

                    <div class='table-responsive' id="resultCadaProfe">

                       
                    </div>
            
                </div>

            </form>


            <!-- FORM VITRINE-->
              <br>
            <form id="formVitrine">
                                <!-- COMUNICAÇÃO COM BASE DE DADOS -->
                               <?php 
                                   $conexao= mysqli_connect("localhost","root","","escolaprovincia") ;  
                                   $dados5 = "SELECT *FROM escolas" ;
                                   $resultado5 = mysqli_query($conexao,$dados5);
                                   $result5 = mysqli_fetch_array($resultado5);
                        
                        
                              ?>
                  
                <div class="container">


                   
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" >
                               <p id="pVitrine"></p>
                            </div>
                            <div class="carousel-item ">
                                <img src="imagens/imgEscola/" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="imagens/imgEscola/" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="imagens/imgEscola/" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="imagens/imgEscola/" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="imagens/imgEscola/" class="d-block w-100" alt="...">
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
            <!-- BOTOES DO ADMINISTRADOR    -->

            <div id="divBtAdministrador">



                <ul class="nav nav-pills flex-column mb-auto" id="btAdmi" hidden>
                    <li><img class="img1" src="imagens/imgCentral/alunos.png" alt=""><button class=" btn-primary" onclick="BtAluno()" id="aluno">Cadastrar Alunos</button></li>
                    <li><img class="img1" src="imagens/imgCentral/prof.png" alt=""><button class=" btn-primary" onclick="BtProfessor()" id="professor">Cadastrar Professores</button></li>
                    <li><img class="img1" src="imagens/imgCentral/ferramenta.png" alt=""><button class=" btn-primary" onclick="BtFerramenta()" id="ferramenta">Alterações dos Dados</button></li>
                    <li><img class="img1" src="imagens/imgCentral/dinheiro.png" alt=""><button class=" btn-primary" onclick="BtPagamento()" id="financa">Pagamento</button></li>
                    <li><img class="img1" src="imagens/imgCentral/anucio.png" alt=""><button class=" btn-primary" onclick="BtAnuncio()" id="anuncio">Adicionar Anúncio</button></li>
                </ul>

                <!--FORMULARIO DO CADASTRO DO ALUNO-->


                <form action="#" class="formAluno" id="formAluno" hidden>

                    <div class="col-auto" id="divBt">

                        <button class="btn-close" type="button" aria-label="Close" id="Close1" onclick="CloseAdmi()"> </button>

                    </div>
                    <h3 id="alerta" style="color: red; text-align: center;"></h3>
                    <div class="container " id="de">

                        <div class="container form-control col-sm-10" id="scrol">

                            <!-- COMUNICAÇÃO COM BASE DE DADOS -->


                            <!-- 1 OUTROS CAMPOS-->
                            <div class="d-flex justify-content-center py-3 " id="divMenu">
                                <div class="form-floating mb-3 col-sm-1">
                                    <input type="text" class="form-control" id="sala" placeholder="Sala">
                                    <label for="floatingInput">Sala</label>
                                </div>
                                <div class="form-floating mb-1 col-sm-1">
                                   
                                    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="turma">
                                                              
                                                              <option >economia</option>
                                                              <option >direito</option>
                                                              
                                                            </select>
                                                            <label for="floatingInput">Turma</label>
                                
                                </div>
                                <div class="form-floating mb-1  col-sm-2" >
                                    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="curso">
                                                      
                                                      <option >economia</option>
                                                      <option >direito</option>
                                                      
                                                    </select>
                                                    <label for="floatingInput">Curso</label>

                                </div>
                                <div class="form-floating mb-1  col-sm-2">
                                    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="classe">
                                            
                                                                <option>1ª Classe</option>
                                                                <option>2ª Classe</option>
                                                                <option>3ª Classe</option>
                                                                <option>4ª Classe</option>
                                                                <option>5ª Classe</option>
                                                                <option>6ª Classe</option>
                                                                <option>7ª Classe</option>
                                                                <option>8ª Classe</option>
                                                                <option>9ª Classe</option>
                                                                <option>10ª Classe</option>
                                                                <option>11ª Classe</option>
                                                                <option>12ª Classe</option>
                                                                <option>13ª Classe</option>
                                                
                                                    </select>
                                                    <label for="floatingInput">Classe</label>
                                </div>
                                <div class="form-floating mb-1  col-sm-2">
                                    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="turno">
                                                      <option >Manhã</option>
                                                      <option >Tarde</option>
                                                      <option >Noite</option>
                                                    </select>
                                                    <label for="floatingInput">Turno</label>
                                </div>
                                <div class="form-floating mb-3 col-sm-2">
                                    <input type="number" class="form-control" id="anoLetivo" placeholder="Ano letivo">
                                    <label for="floatingInput">Ano letivo</label>
                                </div>
                                <input class="form-check-input" type="checkbox" value="1" id="ChekBox">
                            </div>

                            <!-- 2 OUTROS CAMPOS-->
                                  <input type="hidden" id="hidenIdAluno1">
                            <div class="d-flex justify-content-center py-3 " id="divMenu">
                                <div class="form-floating mb-3 col-sm-1">
                                    <input type="number" class="form-control" id="numero" placeholder="Nª">
                                    <label for="floatingInput">Nª</label>
                                </div>
                                <div class="form-floating mb-3 col-sm-2">
                                    <input type="text" class="form-control" id="idAluno1"  placeholder="Id">
                                    <label for="floatingInput">Id</label>
                                </div>
                                <div class="form-floating mb-2 col-sm-6">
                                    <input type="text" class="form-control" id="nomeAluno" placeholder="Nome Completo">
                                    <label for="floatingInput">Nome Completo do Aluno</label>
                                </div>
                                <div class="form-floating mb-2 col-sm-2">
                                    <input type="text" class="form-control" id="nProcesso" placeholder="processo">
                                    <label for="floatingInput">Nª Processo</label>
                                </div>
                               

                            </div>


                            <!-- 3 OUTROS CAMPOS-->

                            <div class="d-flex justify-content-center py-3 " id="divMenu">
                                <div class="form-floating mb-3 col-sm-5">
                                    <input type="text" class="form-control" id="biAluno" placeholder="Nª do BI">
                                    <label for="floatingInput">Nª do BI</label>
                                </div>
                                <div class="form-floating mb-3 col-sm-4">
                                    <input type="date" class="form-control" id="dataNasc" placeholder="Nasc">
                                    <label for="floatingInput"> Nascimento</label>
                                </div>
                                <div class="form-floating mb-3  col-sm-1">
                                    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="sexo">
                                                          
                                                          <option >M</option>
                                                          <option >F</option>
                                                        </select>
                                                        <label for="floatingInput">Sexo</label>
                                </div>

                            </div>
                            <hr>

                            <!-- 4 OUTROS CAMPOS-->

                            <div class="d-flex justify-content-center py-3 " id="divMenu">

                                <div class="form-floating mb-2 col-sm-6">
                                    <input type="text" class="form-control" id="nomeEncarregado" placeholder="Nome Encarregado">
                                    <label for="floatingInput">Nome Completo do Encarregado</label>
                                </div>
                                <div class="form-floating mb-3 col-sm-5">
                                    <input type="text" class="form-control" id="biEncarregado" placeholder="Nª do BI">
                                    <label for="floatingInput">Nª do BI</label>
                                </div>


                            </div>

                            <!-- 4 OUTROS CAMPOS-->

                            <div class="d-flex justify-content-center py-3 " id="divMenu">

                                <div class="form-floating mb-2 col-sm-6">
                                    <input type="text" class="form-control" id="contactosEncarregado" placeholder="Contactos">
                                    <label for="floatingInput">Contactos do Encarregado</label>
                                </div>
                                <div class="form-floating mb-2 col-sm-5">
                                    <input type="text" class="form-control" id="contactosAluno" placeholder="Contactos">
                                    <label for="floatingInput">Contactos do Aluno</label>
                                </div>

                            </div>


                        </div><br>

                        <input class="btn btn-primary col-sm-2" type="button" value="Cadastrar" id="btCadastrarAluno">


                    </div>



                </form>



                <!--FORMULARIO DO CADASTRO DO PROFESSOR-->

                <!-- COMUNICAÇÃO COM BASE DE DADOS -->

                <form  class="formProf" id="formProf" hidden>

                    <div class="col-auto" id="divBt">

                        <button class="btn-close" type="button" aria-label="Close" id="Close1" onclick="CloseAdmi()"> </button>

                    </div>
                    <br> <h3 id="alerta" style="color: red; text-align: center;"></h3>
                    <div class="container form-control col-sm-10" id="de">

                        <div class="form-group col-sm-12" id="scrol">


                            <!-- 2 OUTROS CAMPOS-->

                            <div class="d-flex justify-content-center py-3 " id="divMenu">
                            <input type="hidden" id="hidenIdProfe1">
                                  <div class="form-floating mb-3 col-sm-2">
                                    <input type="text" class="form-control" id="idProfe1" placeholder="Id">
                                    <label for="floatingInput">Id</label>
                                </div>

                                <div class="form-floating mb-2 col-sm-6">
                                    <input type="text" class="form-control" id="nomeProfessor" placeholder="Nome Completo">
                                    <label for="floatingInput">Nome Completo do Professor</label>
                                </div>
                                <div class="form-floating mb-3 col-sm-2">
                                    <input type="date" class="form-control" id="dataNascP" placeholder="Nascimento">
                                    <label for="floatingInput">Nascimento</label>
                                </div>
                                <div class="form-floating mb-3  col-sm-1">
                                    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="sexoP">
                                                             
                                                              <option >M</option>
                                                              <option >F</option>
                                                            </select>
                                                            <label for="floatingInput">Sexo</label>
                                </div>

                            </div>

                            <!-- 1 OUTROS CAMPOS-->

                            <div class="d-flex justify-content-center py-3 " id="divMenu">
                                <div class="form-floating mb-3 col-sm-5">
                                    <input type="text" class="form-control" id="biProfessor" placeholder="Nª do BI">
                                    <label for="floatingInput">Nª do BI</label>
                                </div>

                                <div class="form-floating mb-1  col-sm-2">
                                    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="nivel">
                                                              
                                                              <option >Tecnico Medio</option>
                                                              <option >Tecnico Superior</option>
                                                             
                                                            </select>
                                                            <label for="floatingInput">Nivel Academico</label>

                                </div>
                                <div class="form-floating mb-1  col-sm-2">
                                    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="cargo">
                                                              
                                                              <option >professor</option>
                                                              <option >coordenador</option>
                                                              
                                                            </select>
                                                            <label for="floatingInput">Cargo</label>
                                </div>
                                <div class="form-floating mb-1  col-sm-2">
                                    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="curso">
                                                              
                                                              <option >economia</option>
                                                              <option >direito</option>
                                                              
                                                            </select>
                                                            <label for="floatingInput">Curso</label>
                                </div>

                            </div>


                            <!-- OUTRO CAMPO-->
                            <div class="d-flex justify-content-center py-3 " id="divMenu">
                                <div class="form-floating mb-3 col-sm-3">
                                    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="curso1">
                                                              
                                                              <option >economia</option>
                                                              <option >direito</option>
                                                              
                                                            </select>
                                                            <label for="floatingInput">Curso</label>
                                </div>
                                <div class="form-floating mb-3 col-sm-2">
                                    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="disciplina1">
                                                              
                                                              <option >economia</option>
                                                              <option >direito</option>
                                                              
                                                            </select>
                                                            <label for="floatingInput">Disciplina</label>
                                </div>

                                <div class="form-floating mb-2 col-sm-1">
                                    <input type="number" class="form-control" id="hora1" placeholder="Hora">
                                    <label for="floatingInput">Hora</label>
                                </div>

                                <div class="form-floating mb-1  col-sm-2">
                                    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="classe1">
                                                              
                                                                <option>1ª Classe</option>
                                                                <option>2ª Classe</option>
                                                                <option>3ª Classe</option>
                                                                <option>4ª Classe</option>
                                                                <option>5ª Classe</option>
                                                                <option>6ª Classe</option>
                                                                <option>7ª Classe</option>
                                                                <option>8ª Classe</option>
                                                                <option>9ª Classe</option>
                                                                <option>10ª Classe</option>
                                                                <option>11ª Classe</option>
                                                                <option>12ª Classe</option>
                                                                <option>13ª Classe</option>
                                                              
                                                            </select>
                                                            <label for="floatingInput">Classe</label>
                                </div>
                                <div class="form-floating mb-1  col-sm-1">
                                    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="turno1">
                                                              
                                                              <option >Manhã</option>
                                                              <option >Tarde</option>
                                                              <option >Noite</option>
                                                              
                                                              
                                                            </select>
                                                            <label for="floatingInput">Turno</label>
                                </div>
                                <div class="form-floating mb-2 col-sm-1">
                                   <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="turma1">
                                                              
                                                              <option >economia</option>
                                                              <option >direito</option>
                                                              
                                                            </select>
                                                            <label for="floatingInput">Turma</label>
                                </div>

                            </div>

                           <!-- OUTRO CAMPO-->
                           <div class="d-flex justify-content-center py-3 " id="divMenu">
                               <div class="form-floating mb-3 col-sm-3">
                                    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="curso2">
                                                              
                                                              <option >economia</option>
                                                              <option >direito</option>
                                                              
                                                            </select>
                                                            <label for="floatingInput">Curso</label>
                                </div>
                                <div class="form-floating mb-3 col-sm-2">
                                    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="disciplina2">
                                                              
                                                              <option >economia</option>
                                                              <option >direito</option>
                                                              
                                                            </select>
                                                            <label for="floatingInput">Disciplina</label>
                                </div>

                                <div class="form-floating mb-2 col-sm-1">
                                    <input type="number" class="form-control" id="hora2" placeholder="Hora">
                                    <label for="floatingInput">Hora</label>
                                </div>

                                <div class="form-floating mb-1  col-sm-2">
                                    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="classe2">
                                                              
                                                              <option>1ª Classe</option>
                                                                <option>2ª Classe</option>
                                                                <option>3ª Classe</option>
                                                                <option>4ª Classe</option>
                                                                <option>5ª Classe</option>
                                                                <option>6ª Classe</option>
                                                                <option>7ª Classe</option>
                                                                <option>8ª Classe</option>
                                                                <option>9ª Classe</option>
                                                                <option>10ª Classe</option>
                                                                <option>11ª Classe</option>
                                                                <option>12ª Classe</option>
                                                                <option>13ª Classe</option>
                                                              
                                                            </select>
                                                            <label for="floatingInput">Classe</label>
                                </div>
                                <div class="form-floating mb-1  col-sm-1">
                                    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="turno2">
                                                              
                                                              <option >Manhã</option>
                                                              <option >Tarde</option>
                                                              <option >Noite</option>
                                                              
                                                            </select>
                                                            <label for="floatingInput">Turno</label>
                                </div>
                                <div class="form-floating mb-2 col-sm-1">
                                    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="turma2">
                                                              
                                                              <option >economia</option>
                                                              <option >direito</option>
                                                              
                                                            </select>
                                                            <label for="floatingInput">Turma</label>
                                </div>

                            </div>


                            <!-- OUTRO CAMPO-->
                            <div class="d-flex justify-content-center py-3 " id="divMenu">
                                <div class="form-floating mb-3 col-sm-3">
                                    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="curso3">
                                                              
                                                              <option >economia</option>
                                                              <option >direito</option>
                                                              
                                                            </select>
                                                            <label for="floatingInput">Curso</label>
                                </div>
                                <div class="form-floating mb-3 col-sm-2">
                                   <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="disciplina3">
                                                              
                                                              <option >economia</option>
                                                              <option >direito</option>
                                                              
                                                            </select>
                                                            <label for="floatingInput">Disciplina</label>
                                </div>

                                <div class="form-floating mb-2 col-sm-1">
                                    <input type="number" class="form-control" id="hora3" placeholder="Hora">
                                    <label for="floatingInput">Hora</label>
                                </div>

                                <div class="form-floating mb-1  col-sm-2">
                                    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="classe3">
                                                              
                                                             <option>1ª Classe</option>
                                                                <option>2ª Classe</option>
                                                                <option>3ª Classe</option>
                                                                <option>4ª Classe</option>
                                                                <option>5ª Classe</option>
                                                                <option>6ª Classe</option>
                                                                <option>7ª Classe</option>
                                                                <option>8ª Classe</option>
                                                                <option>9ª Classe</option>
                                                                <option>10ª Classe</option>
                                                                <option>11ª Classe</option>
                                                                <option>12ª Classe</option>
                                                                <option>13ª Classe</option>
                                                              
                                                            </select>
                                                            <label for="floatingInput">Classe</label>
                                </div>
                                <div class="form-floating mb-1  col-sm-1">
                                    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="turno3">
                                                              
                                                              <option >Manhã</option>
                                                              <option >Tarde</option>
                                                              <option>Noite</option>
                                                              
                                                            </select>
                                                            <label for="floatingInput">Turno</label>
                                </div>
                                <div class="form-floating mb-2 col-sm-1">
                                   <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="turma3">
                                                              
                                                              <option >economia</option>
                                                              <option >direito</option>
                                                              
                                                            </select>
                                                            <label for="floatingInput">Turma</label>
                                </div>

                            </div>



                            <!--OUTRO CAMPO-->
                            <div class="d-flex justify-content-center py-3 " id="divMenu">

                                <div class="form-floating mb-2 col-sm-6">
                                    <input type="number" class="form-control" id="contactosProfessor" placeholder="Contactos">
                                    <label for="floatingInput">Contactos</label>
                                </div>
                                <div class="form-floating mb-2 col-sm-5">
                                    <input type="email" class="form-control" id="emailProfessor" placeholder="Email">
                                    <label for="floatingInput">Email</label>
                                </div>

                            </div>

                        </div><br>

                        <input class="btn btn-primary col-sm-2" type="button" value="Cadastrar" id="btCadastrarProfe">


                    </div>



                </form>


                <!-- FORMULARIO DAS ALTERACAO  -->

                <!-- COMUNICAÇÃO COM BASE DE DADOS -->


                <div  class="formFerramenta"  id="formFerramenta" name="formFerramenta" hidden>

                    <div class="col-auto" id="divBt">
                    
                        <button class="btn-close" type="button" aria-label="Close" id="Close1" onclick="CloseAdmi()"> </button>

                    </div>
                           
                    <div class="container-fluid  col-md-12" id="de">
                   
                       
                    <button class="btn-primary s" onclick="BtAlteDisc()" id="btFormAlteDisc">Formulario das Disciplinas</button> <button class="btn-primary s" onclick="BtAlteImagem()">Formulario das Imagens</button> <button class="btn-primary s" onclick="BtAlteProf()">Formulario do Professor</button> <button class="btn-primary s" onclick="BtAlteAluno()">Formulario do Aluno</button> <button class="btn-primary s" id="btFormEscola" onclick="BtAlteAdmi()">Formulario da Escola</button>
                       
                    <!--FORMULARIO DE ALTERACAO  DO ALUNO-->


                        <div class="formAlteAluno" id="formAlteAluno" hidden>
                                 <input type="hidden" id="hidenAltAluno">  
                                 <input type="hidden" id="idAltAluno"> 
                            <div class="d-flex justify-content-center py-3 " id="divMenu">

                                <div class="form-floating mb-2 col-sm-4">
                                    <input type="text" class="form-control" id="buscaAltAluno" placeholder="Pesquisar">
                                    <label for="floatingInput">Pesquisar</label>
                                </div>
                                <div class="form-floating mb-1 col-sm-2">
                                    <button id="btPesquisarAltAluno" class="btn btn-primary form " style="padding: 15px">Pesquisar</button>
                                </div>


                            </div>

                           
                            <div class="container-fluid  form-group col-sm-12" id="de1">

                                <!-- COMUNICAÇÃO COM BASE DE DADOS -->


                                <!-- 1 OUTROS CAMPOS-->
                                <div class="d-flex justify-content-center py-3 " id="divMenu">
                                    <div class="form-floating mb-3 col-sm-1">
                                        <input type="text" class="form-control" id="salaAltAluno" placeholder="Sala">
                                        <label for="floatingInput">Sala</label>
                                    </div>
                                    <div class="form-floating mb-3 col-sm-1">
                                          <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="turmaAltAluno">
                                                              
                                                              <option >One</option>
                                                              <option >Two</option>
                                                              <option >Three</option>
                                                            </select>
                                        <label for="floatingInput">Turma</label>
                                    </div>
                                    <div class="form-floating mb-1  col-sm-3">
                                        <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="cursoAltAluno">
                                                              
                                                              <option >One</option>
                                                              <option >Two</option>
                                                              <option >Three</option>
                                                            </select>
                                        <label for="floatingInput">Curso</label>

                                    </div>
                                    <div class="form-floating mb-1  col-sm-2">
                                        <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="classeAltAluno">
                                                             
                                                              <option >1ª Classe</option>
                                                              <option >2ª Classe</option>
                                                              <option >3ª Classe</option>
                                                              <option >4ª Classe</option>
                                                              <option >5ª Classe</option>
                                                              <option >6ª Classe</option>
                                                              <option >7ª Classe</option>
                                                              <option >8ª Classe</option>
                                                              <option >9ª Classe</option>
                                                              <option >10ª Classe</option>
                                                              <option >11ª Classe</option>
                                                              <option >12ª Classe</option>
                                                              <option >13ª Classe</option>
                                                            </select>
                                        <label for="floatingInput">Classe</label>
                                    </div>
                                    <div class="form-floating mb-1  col-sm-1">
                                        <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="turnoAltAluno">
                                                             
                                                              <option >Manhã</option>
                                                              <option >Tarde</option>
                                                              <option >Noite</option>
                                                            </select>
                                        <label for="floatingInput">Turno</label>
                                    </div>
                                    <div class="form-floating mb-3 col-sm-2">
                                        <input type="number" class="form-control" id="anoAltAluno" placeholder="Ano letivo">
                                        <label for="floatingInput">Ano letivo</label>
                                    </div>
                                    <input class="form-check-input" type="checkbox" value="" id="ChekBoxAltAluno">
                                </div>

                                <!-- 2 OUTROS CAMPOS-->

                                <div class="d-flex justify-content-center py-3 " id="divMenu">
                                    <div class="form-floating mb-3 col-sm-1">
                                        <input type="number" class="form-control" id="numeroAltAluno" placeholder="Nª">
                                        <label for="floatingInput">Nª</label>
                                    </div>
                                    <div class="form-floating mb-2 col-sm-6">
                                        <input type="text" class="form-control" id="nomeAltAluno" placeholder="Nome Completo">
                                        <label for="floatingInput">Nome Completo do Aluno</label>
                                    </div>
                                    <div class="form-floating mb-3 col-sm-2">
                                        <input type="text" class="form-control" id="processoAltAluno" placeholder="processo">
                                        <label for="floatingInput">Nª Processo</label>
                                    </div>
                                    <div class="form-floating mb-2  col-sm-1">
                                        <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="sexoAltAluno">
                                                                  
                                                                  <option >M</option>
                                                                  <option >F</option>
                                                                </select>
                                        <label for="floatingInput">Sexo</label>
                                    </div>

                                </div>


                                <!-- 3 OUTROS CAMPOS-->

                                <div class="d-flex justify-content-center py-3 " id="divMenu">
                                    <div class="form-floating mb-3 col-sm-6">
                                        <input type="text" class="form-control" id="biAltAluno" placeholder="Nª do BI">
                                        <label for="floatingInput">Nª do BI</label>
                                    </div>
                                    <div class="form-floating mb-3 col-sm-5">
                                        <input type="date" class="form-control" id="dataAltAluno" placeholder="Nasc">
                                        <label for="floatingInput"> Nascimento</label>
                                    </div>

                                </div>
                                <hr>

                                <!-- 4 OUTROS CAMPOS-->

                                <div class="d-flex justify-content-center py-3 " id="divMenu">

                                    <div class="form-floating mb-2 col-sm-6">
                                        <input type="text" class="form-control" id="encarregadoAltAluno" placeholder="Nome Encarregado">
                                        <label for="floatingInput">Nome Completo do Encarregado</label>
                                    </div>
                                    <div class="form-floating mb-3 col-sm-5">
                                        <input type="text" class="form-control" id="biEncarregadoAltAluno" placeholder="Nª do BI">
                                        <label for="floatingInput">Nª do BI</label>
                                    </div>


                                </div>

                                <!-- 4 OUTROS CAMPOS-->

                                <div class="d-flex justify-content-center py-3 " id="divMenu">

                                    <div class="form-floating mb-2 col-sm-6">
                                        <input type="number" class="form-control" id="contactosEncarregadoAltAluno" placeholder="Contactos">
                                        <label for="floatingInput">Contactos do Encarregado</label>
                                    </div>
                                    <div class="form-floating mb-2 col-sm-5">
                                        <input type="number" class="form-control" id="contactosAltAluno" placeholder="Contactos">
                                        <label for="floatingInput">Contactos do Aluno</label>
                                    </div>

                                </div>


                            </div><br>

                            <input class="btn btn-primary col-sm-2" type="button" value="Cadastrar" id="btCadAltAluno">
                        </div>


                        <!--FORMULARIO DE ALTERACAO  DO PROFESSOR-->


                        <div class="formAlteProf" id="formAlteProf" hidden>
                            <input type="hidden" id="hidenAltProfe">
                            <input type="hidden" id="idAltProfe">
                            
                            <div class="d-flex justify-content-center py-3 " id="divMenu">

                                <div class="form-floating mb-2 col-sm-4">
                                    <input type="text" class="form-control" id="buscaAltProfe" placeholder="Pesquisar">
                                    <label for="floatingInput">Pesquisar</label>
                                </div>
                                <div class="form-floating mb-1 col-sm-2">
                                    <button id="btPesquisarAltProfe" class="btn btn-primary form " style="padding: 15px">Pesquisar</button>
                                </div>


                            </div>

                            <div class="container-fluid form-group col-sm-8" id="de1">

                                <!-- 2 OUTROS CAMPOS-->

                                <div class="d-flex justify-content-center py-3 " id="divMenu">

                                    <div class="form-floating mb-2 col-sm-6">
                                        <input type="text" class="form-control" id="nomeAltProfe" placeholder="Nome Completo">
                                        <label for="floatingInput">Nome Completo do Professor</label>
                                    </div>
                                    <div class="form-floating mb-3 col-sm-4">
                                        <input type="date" class="form-control" id="dataAltProfe" placeholder="Nascimento">
                                        <label for="floatingInput">Nascimento</label>
                                    </div>
                                    <div class="form-floating mb-2  col-sm-1">
                                        <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="sexoAltProfe">
                                                                              
                                                                              <option >M</option>
                                                                              <option >F</option>
                                                                            </select>
                                                                            <label for="floatingInput">Sexo</label>
                                    </div>

                                </div>

                                <!-- 1 OUTROS CAMPOS-->

                                <div class="d-flex justify-content-center py-3 " id="divMenu">
                                    <div class="form-floating mb-3 col-sm-5">
                                        <input type="text" class="form-control" id="biAltProfe" placeholder="Nª do BI">
                                        <label for="floatingInput">Nª do BI</label>
                                    </div>

                                    <div class="form-floating mb-1  col-sm-2">
                                        <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="nivelAltProfe">
                                                                              
                                                                              
                                                                              <option >Técnico Superior</option>
                                                                              <option >Técnico Médio</option>
                                                                            </select>
                                                                            <label for="floatingInput">Nivel Acadêmico</label>

                                    </div>
                                    <div class="form-floating mb-1  col-sm-2">
                                        <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="cargoAltProfe">
                                                                             
                                                                              <option>Professor</option>
                                                                              <option >Coordenador</option>
                                                                              <option>Outro</option>
                                                                            </select>
                                                                            <label for="floatingInput">Cargo</label>
                                    </div>
                                    <div class="form-floating mb-1  col-sm-2">
                                        <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="cursoAltProfe">
                                                                              
                                                                              <option >One</option>
                                                                              <option >Two</option>
                                                                              <option >Three</option>
                                                                            </select>
                                                                            <label for="floatingInput">Curso</label>
                                    </div>

                                </div>


                                <!-- OUTRO CAMPO-->
                                <div class="d-flex justify-content-center py-3 " id="divMenu">
                                     <div class="form-floating mb-1  col-sm-3">
                                        <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="cursoAltProfe1">
                                                                              
                                                                              <option >One</option>
                                                                              <option >Two</option>
                                                                              <option >Three</option>
                                                                            </select>
                                                                            <label for="floatingInput">Curso</label>
                                    </div>

                                    <div class="form-floating mb-3 col-sm-2">
                                        
                                        <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="discAltProfe1">
                                                                              
                                                                              <option >One</option>
                                                                              <option >Two</option>
                                                                              <option >Three</option>
                                                                            </select>
                                                                            <label for="floatingInput">Disciplina</label>
                                    </div>

                                    <div class="form-floating mb-2 col-sm-1">
                                        <input type="number" class="form-control" id="horaAltProfe1" placeholder="Hora">
                                        <label for="floatingInput">Hora</label>
                                    </div>

                                    <div class="form-floating mb-2  col-sm-2">
                                        <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="classeAltProfe1">
                                                                                 
                                                              <option >1ª Classe</option>
                                                              <option >2ª Classe</option>
                                                              <option >3ª Classe</option>
                                                              <option >4ª Classe</option>
                                                              <option >5ª Classe</option>
                                                              <option >6ª Classe</option>
                                                              <option >7ª Classe</option>
                                                              <option >8ª Classe</option>
                                                              <option >9ª Classe</option>
                                                              <option >10ª Classe</option>
                                                              <option >11ª Classe</option>
                                                              <option >12ª Classe</option>
                                                              <option >13ª Classe</option>
                                                             </select>
                                                    <label for="floatingInput">Classe</label>

                                    </div>
                                    <div class="form-floating mb-1  col-sm-1">
                                        <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="turnoAltProfe1">
                                                                                  
                                                                                  <option >Manhã</option>
                                                                                  <option >Tarde</option>
                                                                                  <option >Noite</option>
                                                                                </select>
                                                                                <label for="floatingInput">Turno</label>
                                    </div>
                                    <div class="form-floating mb-2 col-sm-1">
                                       
                                       <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="turmaAltProfe1">
                                                                              
                                                                              <option >One</option>
                                                                              <option >Two</option>
                                                                              <option >Three</option>
                                                                            </select>
                                                                            <label for="floatingInput">Turma</label>
                                    </div>

                                </div>

                                <!-- OUTRO CAMPO-->
                                <div class="d-flex justify-content-center py-3 " id="divMenu">
                                     <div class="form-floating mb-1  col-sm-3">
                                        <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="cursoAltProfe2">
                                                                              
                                                                              <option >One</option>
                                                                              <option >Two</option>
                                                                              <option >Three</option>
                                                                            </select>
                                                                            <label for="floatingInput">Curso</label>
                                    </div>

                                    <div class="form-floating mb-3 col-sm-2">
                                       <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="discAltProfe2">
                                                                              
                                                                              <option >One</option>
                                                                              <option >Two</option>
                                                                              <option >Three</option>
                                                                            </select>
                                                                            <label for="floatingInput">Disciplina</label>
                                    </div>

                                    <div class="form-floating mb-2 col-sm-1">
                                        <input type="number" class="form-control" id="horaAltProfe2" placeholder="Hora">
                                        <label for="floatingInput">Hora</label>
                                    </div>

                                    <div class="form-floating mb-2  col-sm-2">
                                        <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="classeAltProfe2">
                                                                                 
                                                              <option >1ª Classe</option>
                                                              <option >2ª Classe</option>
                                                              <option >3ª Classe</option>
                                                              <option >4ª Classe</option>
                                                              <option >5ª Classe</option>
                                                              <option >6ª Classe</option>
                                                              <option >7ª Classe</option>
                                                              <option >8ª Classe</option>
                                                              <option >9ª Classe</option>
                                                              <option >10ª Classe</option>
                                                              <option >11ª Classe</option>
                                                              <option >12ª Classe</option>
                                                              <option >13ª Classe</option>
                                                                                </select>
                                                                                <label for="floatingInput">Classe</label>

                                    </div>
                                    <div class="form-floating mb-1  col-sm-1">
                                        <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="turnoAltProfe2">
                                                                                  
                                                                                  <option >Manhã</option>
                                                                                  <option >Tarde</option>
                                                                                  <option >Noite</option>
                                                                                </select>
                                                                                <label for="floatingInput">Turno</label>
                                    </div>
                                    <div class="form-floating mb-2 col-sm-1">
                                       <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="turmaAltProfe1">
                                                                              
                                                                              <option >One</option>
                                                                              <option >Two</option>
                                                                              <option >Three</option>
                                                                            </select>
                                                                            <label for="floatingInput">Turma</label>
                                    </div>

                                </div>

                               <!-- OUTRO CAMPO-->
                               <div class="d-flex justify-content-center py-3 " id="divMenu">
                                    <div class="form-floating mb-1  col-sm-3">
                                        <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="cursoAltProfe3">
                                                                              
                                                                              <option >One</option>
                                                                              <option >Two</option>
                                                                              <option >Three</option>
                                                                            </select>
                                                                            <label for="floatingInput">Curso</label>
                                    </div>

                                    <div class="form-floating mb-3 col-sm-2">
                                       <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="discAltProfe3">
                                                                              
                                                                              <option >One</option>
                                                                              <option >Two</option>
                                                                              <option >Three</option>
                                                                            </select>
                                                                            <label for="floatingInput">Disciplina</label>
                                    </div>

                                    <div class="form-floating mb-2 col-sm-1">
                                        <input type="number" class="form-control" id="horaAltProfe3" placeholder="Hora">
                                        <label for="floatingInput">Hora</label>
                                    </div>

                                    <div class="form-floating mb-2  col-sm-2">
                                        <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="classeAltProfe3">
                                                                                 
                                                              <option >1ª Classe</option>
                                                              <option >2ª Classe</option>
                                                              <option >3ª Classe</option>
                                                              <option >4ª Classe</option>
                                                              <option >5ª Classe</option>
                                                              <option >6ª Classe</option>
                                                              <option >7ª Classe</option>
                                                              <option >8ª Classe</option>
                                                              <option >9ª Classe</option>
                                                              <option >10ª Classe</option>
                                                              <option >11ª Classe</option>
                                                              <option >12ª Classe</option>
                                                              <option >13ª Classe</option>
                                                                                </select>
                                                                                <label for="floatingInput">Classe</label>

                                    </div>
                                    <div class="form-floating mb-1  col-sm-1">
                                        <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="turnoAltProfe3">
                                                                                  
                                                                                  <option >Manhã</option>
                                                                                  <option >Tarde</option>
                                                                                  <option >Noite</option>
                                                                                </select>
                                                                                <label for="floatingInput">Turno</label>
                                    </div>
                                    <div class="form-floating mb-2 col-sm-1">
                                        <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="turmaAltProfe3">
                                                                              
                                                                              <option >One</option>
                                                                              <option >Two</option>
                                                                              <option >Three</option>
                                                                            </select>
                                                                            <label for="floatingInput">Turma</label>
                                    </div>

                                </div>

                                <!--OUTRO CAMPO-->
                                <div class="d-flex justify-content-center py-3 " id="divMenu">

                                    <div class="form-floating mb-2 col-sm-6">
                                        <input type="text" class="form-control" id="contactosAltProfe" placeholder="Contactos">
                                        <label for="floatingInput">Contactos</label>
                                    </div>
                                    <div class="form-floating mb-2 col-sm-5">
                                        <input type="email" class="form-control" id="emailAltProfe" placeholder="Email">
                                        <label for="floatingInput">Email</label>
                                    </div>

                                </div>


                            </div><br>

                            <button class="btn btn-primary col-sm-2"   id="btCadAltProfe">Cadastrar</button>

                        </div>






                         
                            
                        <!--FORMULARIO DE ALTERACAO  DO ADMINISTRADOR ESCOLA-->
 

                        <form  name="formAlteAdmi" method="post" class="formAlteAdmi" id="formAlteAdmi" entype="multipart/form-data"  hidden>
                        <input type="hidden"  id="id">
                        <input type="hidden" name="id1" id="hiden" >
                                
                           
                                  <br>
                            <div class="container form-group col-sm-8" id="de1">



                                <!-- 2 OUTROS CAMPOS -->

                                <div class="d-flex justify-content-center py-3 " id="divMenu">

                                    <div class="form-floating mb-2 col-sm-6">
                                        <input type="text" class="form-control" id="nomeEscola" placeholder="Nome"  >
                                        <label for="floatingInput">Nome Da Escola</label>
                                    </div>

                                    <div class="form-floating mb-3 col-sm-5">
                                        <input type="text" class="form-control" id="idEscola" placeholder="idEscola"  >
                                        <label for="floatingInput">Id Escola</label>
                                    </div>

                                </div>


                                
                                <div class="d-flex justify-content-center py-3 " id="divMenu">
                                    <div class="form-floating mb-3 col-sm-6">
                                        <input type="email" class="form-control" id="emailEscola" placeholder="email" >
                                        <label for="floatingInput">Email</label>
                                    </div>

                                    <div class="form-floating mb-2 col-sm-5">
                                        <input type="password" class="form-control" id="senhaEscola" placeholder="pass" >
                                        <label for="floatingInput">Password</label>
                                    </div>
                                </div>


                              
                                <div class="d-flex justify-content-center py-3 " id="divMenu">
                                    <div class="form-floating mb-3 col-sm-6">
                                        <input type="text" class="form-control" id="contactosEscola" placeholder="contacto"  >
                                        <label for="floatingInput">Contactos</label>
                                    </div>

                                    <div class="form-floating mb-3 col-sm-5">
                                        <input type="text" class="form-control" id="gpsEscola" placeholder="gps"  >
                                        <label for="floatingInput">Gps</label>
                                    </div>


                                </div>

                                <div class="d-flex justify-content-center py-3 " id="divMenu">
                                    <div class="form-floating mb-3 col-sm-6">
                                        <input type="text" class="form-control" id="nomeDirector" placeholder="Nome Director"  >
                                        <label for="floatingInput">Nome Director</label>
                                    </div>

                                    <div class="form-floating mb-3 col-sm-5">
                                        <input type="text" class="form-control" id="nomeSubDirector" placeholder="nome Sub Director"  >
                                        <label for="floatingInput">Nome Sub Director</label>
                                    </div>


                                </div>

                                <div class="d-flex justify-content-center py-3 " id="divMenu">
                                    <div class="form-floating mb-3 col-sm-6">
                                        <input type="text" class="form-control" id="nomeSecretaria" placeholder="Nome Secretaria"  >
                                        <label for="floatingInput">Nome Secretaria</label>
                                    </div>

                                </div>

                                                               
                            </div><br>
                            
                            <button class="btn btn-primary col-sm-2" id ="btCadastrarEscola" >Cadastrar</button>

                        </form>


                        <!-- FORMULARIO DAS IMAGENS DA ESCOLA     -->


                        <form  method="post" class="formAlteImagem" id="formAlteImagem" entype="multipart/form-data" hidden>
                        <input type="hidden"  id="id">
                        <input type="hidden" name="id1" id="hiden" >
                                  <input type="hidden" value="" name="idEscola">
                           
                                  <br>
                            <div class="container form-group col-sm-8" id="de1">

                                <div class="d-flex justify-content-center py-3 " id="divMenu">
                                    <div class="form-floating mb-3 col-sm-2">
                                        <input type="file" class="form-control" name="imgPrincipal" placeholder="imagem" >
                                        <label for="floatingInput">Imagem Principal</label>
                                    </div>

                                    <div class="form-floating mb-3 col-sm-2">
                                        <input type="file" class="form-control" name="img1" placeholder="imagem" >
                                        <label for="floatingInput">Imagem</label>
                                    </div>

                                    <div class="form-floating mb-2 col-sm-2">
                                        <input type="file" class="form-control" name="img2" placeholder="imagem" >
                                        <label for="floatingInput">Imagem</label>
                                    </div>

                                    <div class="form-floating mb-2 col-sm-2">
                                        <input type="file" class="form-control" name="img3" placeholder="imagem" >
                                        <label for="floatingInput">Imagem</label>
                                    </div>

                                    <div class="form-floating mb-2 col-sm-2">
                                        <input type="file" class="form-control" name="img4" placeholder="imagem" >
                                        <label for="floatingInput">Imagem</label>
                                    </div>

                                    <div class="form-floating mb-2 col-sm-2">
                                        <input type="file" class="form-control" name="img5" placeholder="imagem" >
                                        <label for="floatingInput">Imagem</label>
                                    </div>


                                </div>


                                                               
                            </div><br>
                            
                            <button class="btn btn-primary col-sm-2" type="submit" >Cadastrar</button>

                        </form>


                          <!-- FORMULARIO DAS DISCIPLINAS DA ESCOLA     -->

                          <!-- COMUNICACAO COM BASE DE DADOS -->
                          <?php   $conexao= mysqli_connect("localhost","root","","escola") ;  
                             $dadosDisc ="SELECT *FROM tbdisciplinas"; 
                             $resultadoDisc = mysqli_query($conexao,$dadosDisc);  
                              $n = 1;
                
                             ?>

                        <div class="formAlteDisc" id="formAlteDisc"  hidden>
                                <input type="hidden"  id="idDisc">
                               <input type="hidden" name="id1" id="hiden" >
                               <input type="hidden" id="valorMo">
                                                                           
                                     
                           
                                  <br>
                            <div class="container form-group col-sm-8" id="de1">
                                <div id="mostraDisc">
                                           <table class="table table-striped">
                                           <thead>
                                              <tr>
                                                <th scope="col">N</th>
                                                <th scope="col">Id</th>
                                                <th scope="col">Disciplinas</th>
                                                <th scope="col">Cursos</th>
                                                <th>Botao</th>
                                               </tr>
                                           </thead>
                                            <tbody>
                                            <?php  while($resultDisc = mysqli_fetch_array($resultadoDisc)){ ?>
                                               <tr>
                                                <td ><?php echo $n++ ?></td>
                                                <td id="td1"></td>
                                                <td id="td2"></td>
                                                <td id="td3"></td>
                                                <td><a href="#" data-idpegar="<?php //echo $resultDisc['id'];?>" data-pegarcurso="<?php //echo $resultDisc['cursos'];?>" data-pegardisciplina="<?php //echo $resultDisc['disciplinas'];?>"  class="btn btn-outline-primary  col-sm-4 pegar" >Alterar </a>
                                                <a href="#" data-idpegari="<?php //echo $resultDisc['id'];?>" class="btn btn-outline-primary  col-sm-4 pegariliminar" >Iliminar </a>
                                                </td>
                                              </tr>
                                            <?php }?>
         
                                            </tbody>
                                         </table> 
                                </div>
                            
                               
                               
                                                              
                            </div><br>
                                    <div class="container d-flex justify-content-center  col-sm-8">
                                            <input type="hidden" id="idDisciplina">
                                          <input id="inputDisciplina" type="text" placeholder="Disciplina" class="form-control col-sm-2">
                                          <div class="form-floating mb-1  col-sm-4">
                                                <select class="form-control col-sm-4 form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="inputCurso">
                                                                                  
                                                                                  <option >Primário</option>
                                                                                  <option >Secundário</option>
                                                                                  <option ></option>
                                                                                </select>
                                                                                <label for="floatingInput">Curso</label>
                                          </div>
                                          <button id="btDisciplina" class="btn btn-primary col-sm-4">Adicionar</button>
                                          <button id="btDisciplinaAt" class="btn btn-primary col-sm-4">Atualizar</button>
                                      
                                    </div>  
                           
                            
                            
                           

                        </div>





                    </div>





                </div>


               


                <!-- FORMULARIO PAGAMENTO  -->

                <!-- COMUNICAÇÃO COM BASE DE DADOS -->

                <div class="formPgamento" id="formPagamento" hidden>
                

                    <div class="col-auto" id="divBt">

                        <button class="btn-close" type="button" aria-label="Close" id="Close1" onclick="CloseAdmi()"> </button>

                    </div>
                    <div class="container form-control  col-md-8" id="cont">
                          <input type="hidden" id="hidenPagamento1">
                          <input type="hidden" id="hidenPagamento">
                        <div class=" col-sm-12" >
                            <div class="d-flex justify-content-center py-3 " id="divMenu">

                                <div class="form-floating mb-2 col-sm-6">
                                    <input type="text" class="form-control" id="buscaPagamento" placeholder="Pesquisar">
                                    <label for="floatingInput">Pesquisar</label>
                                </div>
                                <div class="form-floating mb-1 col-sm-2">
                                    <button  class="btn btn-primary form " style="padding: 15px" id="btPesquisarPagamento">Pesquisar</button>
                                </div>
          
                            </div> <h3 id="alerta" style="color: red; text-align: center;"></h3>
                        <div id="scrolPagamento">
                            <b class="dados">
                                    <div class="mb-1  col-sm-50">
                                        <label>Nome: <b id="bNomePagamento"></b></label><br>
                                        <label>Id: <b id="bIdPagamento"></b></label><br>
                                        <label>Classe: <b id="bClassePagamento"></b></label><br>
                                        <label>Turma: <b id="bTurmaPagamento"></b></label><br>
                                        <label>Turno: <b id="bTurnoPagamento"></b></label><br>
                                        <label>Ultimo mês pago: <b id="bMesPagar"></b></label>
                                    </div>
                                </b>


                            <div class="form-floating mb-3 col-sm-2" id="mes">
                                <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="bMesPagamento">
                                                                              <option >Janeiro</option>
                                                                              <option >Fevereiro</option>
                                                                              <option >Março</option>
                                                                              <option >Abril</option>
                                                                              <option >Maio</option>
                                                                              <option >Junho</option>
                                                                              <option >Julho</option>
                                                                              <option >Agosto</option>
                                                                              <option >Setembro</option>
                                                                              <option >Outubro</option>
                                                                              <option >Novembro</option>
                                                                              <option >Dezembro</option>
                                                                            </select>
                                                                            <label>Mês a Pagar</label>
                            </div>
                            
                            <div class="form-floating mb-3 col-sm-2" id="mes">
                                <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="bMesPagamento">
                                                                              <option >Certificado</option>
                                                                              <option>Cartão</option>
                                                                              <option>Declaração</option>
                                                                            
                                                                            </select>
                                                                            <label>Documento a Pagar</label>
                            </div>

                        </div>
                       </div> 
                        
                        <button class="btn btn-primary" id="btCadPagamento">Pagamento</button>
                    </div>




                </div>




                <!-- FORMULARIO ANUNCIO  -->

                <!-- COMUNICAÇÃO COM BASE DE DADOS -->

                <form class="formAnuncio" id="formAnuncio" hidden>

                    <div class="col-auto" id="divBt">

                        <button class="btn-close" type="button" aria-label="Close" id="Close1" onclick="CloseAdmi()"> </button>

                    </div>
                    <h3 id="alerta" style="color: red; text-align: center;"></h3>
                    <div class="container-fluid  col-md-8" id="cont">

                        <div class=" col-sm-12" id="scrol">
                            <div class="d-flex justify-content-center py-3 " id="divMenu">

                                <div class="form-floating mb-2 col-sm-2">
                                    <label class="form-control" id="btCorFundo">Cor do Fundo</label>
                                    <input type="color"  class="form-control" id="corFundo">

                                </div>

                                <div class="form-floating mb-2 col-sm-2">
                                    <label class="form-control">Cor do Texto</label>
                                    <input type="color" class="form-control" id="corTexto">

                                </div>
                                <div class="form-floating mb-2 col-sm-2">
                                    <label class="form-control">Imagem</label>
                                    <input type="file" class="form-control" id="floatingInput">

                                </div>

                                <div class="form-floating col-sm-2">
                                    <select class="form-select form-select-lg mb-2" aria-label=".form-select-lg example">
                                                                                              
                                                                                              <option value="1">One</option>
                                                                                              <option value="2">Two</option>
                                                                                              <option value="3">Three</option>
                                                                                            </select>
                                                                                            <label>Turma</label>
                                </div>
                                <div class="form-floating col-sm-2">
                                    <select class="form-select form-select-lg mb-2" aria-label=".form-select-lg example">
                                                                                                  <option>1ª Classe</option>
                                                                                                  <option>2ª Classe</option>
                                                                                                  <option>3ª Classe</option>
                                                                                                  <option>4ª Classe</option>
                                                                                                  <option>5ª Classe</option>
                                                                                                  <option>6ª Classe</option>
                                                                                                  <option>7ª Classe</option>
                                                                                                   <option>8ª Classe</option>
                                                                                                   <option>9ª Classe</option>
                                                                                                   <option>10ª Classe</option>
                                                                                                   <option>11ª Classe</option>
                                                                                                   <option>12ª Classe</option>
                                                                                                   <option>13ª Classe</option>
                                                                                                </select>
                                                                                                <label>Classe</label>
                                </div>

                            </div><br><br>
                            <textarea name="" id="textoAnuncio" cols="30" rows="15" style="width:100%;">



                                
                            </textarea>




                           

                        </div>
                        <input class="btn btn-primary" id="btCadastrar" type="submit" value="Publicar">
                    </div>

                </form>
            </div>


            <!--DIV BOTAO DAS INFORMACOES -->
            <div id="divBtInformacao">


                <ul class="nav nav-pills flex-column mb-auto" id="Informacao" hidden>
                    <li><img class="img1" src="imagens/imgCentral/aluno.png" alt=""><button class=" btn-primary" onclick="BtInfAluno()" id="btInfAluno">Aluno</button></li>
                    <li><img class="img1" src="imagens/imgCentral/professor.png" alt=""><button class=" btn-primary" onclick="BtInfProf()" id="btInfProf">Professor</button></li>
                    <li><img class="img1" src="imagens/imgCentral/alunos.png" alt=""><button class=" btn-primary" onclick="BtInfTurma()" id="btInfTurma">Turmas</button></li>
                    <li><img class="img1" src="imagens/imgCentral/dinheiro.png" alt=""><button class=" btn-primary" onclick="GraficoBtInfFinanca()" id="btInfFinanca">Situação Financeira</button></li>
                </ul>




                <!-- FORMULARIO  INFORMACAO DO ALUNO  -->

                <!-- COMUNICAÇÃO COM BASE DE DADOS -->

                <form class="formInfAluno" id="formInfAluno" hidden>

                    <div class="col-auto" id="divBt">

                        <button class="btn-close" type="button" aria-label="Close" id="Close1" onclick="CloseInf()"> </button>
                    </div>
                    <div class="container col-sm-8" id="de">

                        <div class=" col-sm-12" id="scrol">
                            <div class="d-flex justify-content-center py-3 " id="divMenu">

                                <div class="form-floating mb-2 col-sm-6">
                                    <input type="text" class="form-control" id="pesquisarInf" placeholder="Pesquisar">
                                    <label for="floatingInput">Pesquisar Id ou Nome</label>
                                </div>
                                <div class="form-floating mb-1 col-sm-2">
                                    <button type="submit" class="btn btn-primary form " style="padding: 15px" id="btPesqInf" >Pesquisar</button>
                                </div>


                            </div><br>
                            <b class="dados">
                            
                                        <div class="mb-1  col-sm-50">
                                                <label>Nome: <b id="bNome"></b></label><br><br>
                                                <label>Id: <b id="bId"></b></label>
                                                <label id="b1">Nascimento: <b id="bNasc"></b></label><br>
                                                <label>Classe: <b id="bClasse"></b></label>
                                                <label id="b2">Turma: <b id="bTurma"></b></label>
                                                <label id="b2">Turno: <b id="bTurno"></b></label><br>
                                                <label>Faltas: <b id="bFalta"></b></label><br>
                                                <label>Telefone: <b id="bTelefone"></b></label><br><br>
                                                <label>Encarregado: <b id="bEncarregado"></b></label><br>
                                                <label>Telefone: <b id="bTelEncarregado"></b></label><br>
                                                <label>Municipio: <b id="bMunicipio"></b></label>
                                                <label id="b3">Morada: <b id="bMorada"></b></label><br>
                                                <label>Último mês pago: <b id="bMesPago"></b></label>
                                        </div>
                                    </b>






                        </div>
                    </div>
                    <div id="perfil">
                        <img src="imagens/imgCentral/aluno.png" alt="" class="imgInfAluno" id="imgInfAluno">
                    </div>
                </form>



                <!-- FORMULARIO  INFORMACAO DO PROFESSOR  -->

                <!-- COMUNICAÇÃO COM BASE DE DADOS -->

                <form class="formInfProf" id="formInfProf" hidden>

                    <div class="col-auto" id="divBt">

                        <button class="btn-close" type="button" aria-label="Close" id="Close1" onclick="CloseInf()"> </button>
                    </div>
                    <div class="container-fluid  col-m-12" id="de">

                        <div class=" col-sm-12" >
                            <div class="d-flex justify-content-center py-3 " id="divMenu">

                                <div class="form-floating mb-2 col-sm-4">
                                    <input type="text" class="form-control" id="pesquisaProfe" placeholder="Pesquisar">
                                    <label for="floatingInput">Pesquisar</label>
                                </div>
                                <div class="form-floating mb-1 col-sm-2">
                                    <button type="submit" class="btn btn-primary form " style="padding: 15px" id="btPesqProf">Pesquisar</button>
                                </div>


                            </div><br>
                            <b class="dados" >
                                            <div class="mb-1  col-sm-10" id="scrolProfe" >
                                                  
                                                    <label>Nome: <b id="bNomeProfe"></b></label><br><br>
                                                    <label>Id: <b id="bIdProfe"></b></label>
                                                    <label id="b1">Nascimento: <b id="bNascProfe"></b></label><br>
                                                    <label>Cargo: <b id="bCargoProfe"></b></label>
                                                    <label id="b2">Faltas: <b id="bFaltaProfe"></b></label><br>
                                                    <label>Disciplina: <b id="bDisciplinaProfe1"></b></label>
                                                    <label id="b2">Classe: <b id="bClasseProfe1"></b></label>
                                                    <label id="b22">Turma: <b id="bTurmaProfe1"></b></label>
                                                    <label id="b22">Turno: <b id="bTurnoProfe1"></b></label><br>
                                                    <label>Disciplina: <b id="bDisciplinaProfe2"></b></label>
                                                    <label id="b2">Classe: <b id="bClasseProfe2"></b></label>
                                                    <label id="b22">Turma: <b id="bTurmaProfe2"></b></label>
                                                    <label id="b22">Turno: <b id="bTurnoProfe2"></b></label><br>
                                                    <label>Disciplina: <b id="bDisciplinaProfe3"></b></label>
                                                    <label id="b2">Classe: <b id="bClasseProfe3"></b></label>
                                                    <label id="b22">Turma: <b id="bTurmaProfe3"></b></label>
                                                    <label id="b22">Turno: <b id="bTurnoProfe3"></b></label><br>
                                                    <label>Telefone: <b id="bTelefoneProfe"></b></label><br>
                                                    <label>Email: <b id="bEmailProfe"></b></label><br>
                                                    <label>Municipio: <b id="bMunicipioProfe"></b></label>
                                                    <label id="b3">Morada: <b id="bMoradaProfe"></b></label>
                                            </div>
                                        </b>






                        </div><br>
                    </div>

                    <div id="perfil">
                        <img src="imagens/imgCentral/aluno.png" alt="" class="imgInfAluno" id="imgInfAluno">
                    </div>

                </form>


                <!-- FORMULARIO DA INFORMACAO DAS TURMAS  -->

                <!-- COMUNICAÇÃO COM BASE DE DADOS -->


                <div class="formInfTurma" id="formInfTurma" hidden>
                    <div class="col-auto" id="divBt">

                        <button class="btn-close" type="button" aria-label="Close" id="Close1" onclick="CloseInf()"> </button>
                    </div>
                    <div id="divFormInfTurma">
                        <div class="col-auto" id="divBt" style="text-align: right;">

                            <button class="btn btn-primary" id="btPesqInfTurma">Pesquisar</button>
                        </div>

                        <div class="divInf d-flex">

                                <div class="form-floating col-sm-2 ">
                                          <select class="form-select form-select-lg" aria-label=".form-select-lg example">
                                                                <option >1ª Classe</option>
                                                                <option >2ª Classe</option>
                                                                <option >3ª Classe</option>
                                                                <option >4ª Classe</option>
                                                                <option >5ª Classe</option>
                                                                <option >6ª Classe</option>
                                                                <option >7ª Classe</option>
                                                                <option >8ª Classe</option>
                                                                <option >9ª Classe</option>
                                                                <option >10ª Classe</option>
                                                                <option >11ª Classe</option>
                                                                <option >12ª Classe</option>
                                                                <option >13ª Classe</option>
                                                      </select>
                                                      <label>Classe</label>
                                </div>

                                 <div class="form-floating col-sm-2">

                                             <select class="form-control form-select">
                                                                <option >Turma</option>
                                                       </select>
                                                       <label>Turma</label>
                                </div>

                                <div class="form-floating col-sm-2">


                                                 <select class="form-control form-select">
                                                                     <option >Manhã</option>
                                                                     <option >Tarde</option>
                                                                     <option >Noite</option>
                                                      </select>
                                                      <label>Turno</label>
                                </div>
                                 <div class="form-floating col-sm-2">


                                                 <select class="form-control form-select">
                                                                     <option >Iº Trimestre</option>
                                                                     <option >IIº Trimestre</option>
                                                                     <option >IIIº Trimestre</option>
                                                      </select>
                                                      <label>Trimestre</label>
                                </div>



                        </div>
                    </div><br>
                    <!--ESPACO PARA TABELA-->
                    <div class="table-responsive " id="tbResponsivo1">

                        
                    </div>



                </div>

                <!-- FORMULARIO DA INFORMACAO FINANCAS  -->

                <!-- COMUNICAÇÃO COM BASE DE DADOS -->

                <form class="formInfFinanca" id="formInfFinanca" hidden>
                    <div class="col-auto" id="divBt">

                        <button class="btn-close" type="button" aria-label="Close" id="Close1" onclick="CloseInf()"> </button>
                    </div>
                    <div id="divFormInfTurma">
                        <div class="col-auto" id="divBt" style="text-align: right;">

                            <input type="submit" value="Pesquisar" class="btn btn-primary">
                        </div>

                       <div class="divInf d-flex">

                                <div class="form-floating col-sm-2 ">
                                          <select class="form-select form-select-lg" aria-label=".form-select-lg example">
                                                                <option >1ª Classe</option>
                                                                <option >2ª Classe</option>
                                                                <option >3ª Classe</option>
                                                                <option >4ª Classe</option>
                                                                <option >5ª Classe</option>
                                                                <option >6ª Classe</option>
                                                                <option >7ª Classe</option>
                                                                <option >8ª Classe</option>
                                                                <option >9ª Classe</option>
                                                                <option >10ª Classe</option>
                                                                <option >11ª Classe</option>
                                                                <option >12ª Classe</option>
                                                                <option >13ª Classe</option>
                                                      </select>
                                                      <label>Classe</label>
                                </div>

                                 <div class="form-floating col-sm-2">

                                             <select class="form-control form-select">
                                                                <option >Turma</option>
                                                       </select>
                                                       <label>Turma</label>
                                </div>

                                <div class="form-floating col-sm-2">


                                                 <select class="form-control form-select">
                                                                     <option >Manhã</option>
                                                                     <option >Tarde</option>
                                                                     <option >Noite</option>
                                                      </select>
                                                      <label>Turno</label>
                                </div>
                                 <div class="form-floating col-sm-2">


                                                 <select class="form-control form-select">
                                                                     <option >Iº Trimestre</option>
                                                                     <option >IIº Trimestre</option>
                                                                     <option >IIIº Trimestre</option>
                                                      </select>
                                                      <label>Trimestre</label>
                                </div>



                        </div>
                    </div><br>

                        <div class="container">


                            <canvas id="myChart1"></canvas>
                            <a class="linkLuanda" href="VerEstadoTurma.html">Ver</a>
                        </div>
                    </div>





                </form>




            </div>



            <!--FORMULARIO ADICIONAR NOTAS-->

            <div>

                <!-- COMUNICAÇÃO COM BASE DE DADOS -->

                
                

                <div method="post" class="formAdNota" id="formAdNota" hidden>
                    <input type="hidden" id="hidenAddNota">
                    <div class="col-auto" id="divBt">

                        <button class="btn-close" type="button" aria-label="Close" id="Close1" onclick="CloseAdd()"> </button>
                    </div>
                    <h3 id="alerta1" style="color: red; text-align: center;"></h3>
                    <div id="divFormInfTurma">
                        <div class="col-auto" id="divBt" style="text-align: right;">

                            <button class="btn btn-primary" id="btPesqTurma">Pesquisar</button>
                        </div>

                        <div class="d-flex divInf">
                        <div class="form-floating col-sm-2">

                        <select class="form-select form-select-lg">
                                                                        <option >1ª Classe</option>
                                                                        <option >2ª Classe</option>
                                                                        <option >3ª Classe</option>
                                                                        <option >4ª Classe</option>
                                                                        <option >5ª Classe</option>
                                                                        <option >6ª Classe</option>
                                                                        <option >7ª Classe</option>
                                                                        <option >8ª Classe</option>
                                                                        <option >9ª Classe</option>
                                                                        <option >10ª Classe</option>
                                                                        <option >11ª Classe</option>
                                                                        <option >12ª Classe</option>
                                                                        <option >13ª Classe</option>
                                                              </select>
                                                              <label>Classe</label>

                        </div>


                            
                           <div class="form-floating col-sm-2">

                        <select class="form-select form-select-lg">
                                                                        <option >Manhã</option>
                                                                        <option >Tarde</option>
                                                                        <option >Noite</option>
                                                              </select>
                                                              <label>Turno</label>

                        </div>
                        <div class="form-floating col-sm-2">

                        <select class="form-select form-select-lg">
                                                                        <option >Turma</option>
                                                              </select>
                                                              <label>Turma</label>

                        </div>

                         <div class="form-floating col-sm-2">

                        <select class="form-select form-select-lg">
                                                                        <option >Iº Trimestre</option>
                                                                        <option >IIº Trimestre</option>
                                                                        <option >IIIº Trimestre</option>
                                                              </select>
                                                              <label>Trimestre</label>

                        </div>





                        </div>
                    </div>
                    <!--ESPACO PARA TABELA-->
                    <div class="table-responsive " id="tbResponsivo">
                    
                       
                        
                    </div><br>
                    
                   
                      <div id="contain">
                           <button id="bt1" class="btn btn-primary" >Adicionar</button>
                      </div>
                            

</div>

            



            <!--FORMULARIO MENSSANGENS-->
            <div id="btMessagem1">

                <ul class="nav nav-pills flex-column mb-auto" id="formMenssagem" hidden>

                    <li><img class="img1" src="imagens/imgCentral/profMsg.png" alt=""><button class="btn-primary" onclick="BtMenssagemProf()" id="btMenssagemProfessor">Professor</button></li>
                    <li><img class="img1" src="imagens/imgCentral/turmaMsg.png" alt=""><button class="btn-primary" onclick="BtMenssagemTurma()" id="btMenssagemTurma">Turmas</button></li>
                    <li><img class="img1" src="imagens/imgCentral/ministerioMsg.png" alt=""><button class="btn-primary" onclick="ChatMinisterio()" id="btMenssagemMinisterio">Ministério</button></li>

                </ul>


                <!-- COMUNICAÇÃO COM BASE DE DADOS -->


                <form action="#" class="formMenssagemProf" id="formMenssagemProf" hidden>

                    <div class="col-auto" id="divBt">

                        <button class="btn-close" type="button" aria-label="Close" id="Close1" onclick="CloseMenssagem()"> </button>
                    </div><br>
                    <div class="container  col-sm-8" id="de">
                        <div id="divFormInfTurma">

                            <div class="divInf">


                                <select>
                                                                                    <option >Classe</option>
                                                                          </select>

                                <select>
                                                                                    <option >Turma</option>
                                                                           </select>

                                <select>
                                                                                         <option >Turno</option>
                                                                          </select>



                            </div>
                        </div>

                        <div class=" col-sm-12">
                            <div class="d-flex justify-content-center py-3 " id="divMenu">

                                <div class="form-floating mb-2 col-sm-6">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Pesquisar">
                                    <label for="floatingInput">Pesquisar</label>
                                </div>
                                <div class="form-floating mb-1 col-sm-2">
                                    <button type="submit" class="btn btn-primary form " style="padding: 15px">Pesquisar</button>
                                </div>


                            </div><br>
                            <b class="dados">

                                   <?php  
                                    $dados7 = "SELECT *FROM disciplinas";
                                    $resultado7 = mysqli_query($conexao,$dados7);
                                   
                                   
                                   ?>
                                                <div class="mb-1  col-sm-50">
                                                        <ul class="nav nav-pills flex-column mb-auto" id="main-menu">
                                                           <?php while($result7 = mysqli_fetch_array($resultado7)){   ?>
                                                                <li class="nav-item">
                                                                  <?php echo "<a href='#' data-idprofe='$result7[idDisciplina]' data-idchat='$result7[nomeProfe]' class='nav-link text-white saltoChat' aria-current='page' onclick='ChatProf()'>";?>
                                                                         <?php echo $result7['id']." - ".$result7['idDisciplina']." - ".$result7['nomeProfe']."<br>"   ?>
                                                                </a>

                                                                
                                                                </li>
                                                           <?php }?>
                                                               
                                                            </ul>
                                                       
                                                </div>
                                            </b>






                        </div><br>
                    </div>





                </form>

                <!-- CHAT PROFESSOR-->

                <div class="formChatProf" id="formChatProf" hidden>

                    <div class="col-auto" id="divBt">

                        <button class="btn-close" type="button" aria-label="Close" id="Close1" onclick="CloseChatProf()"> </button>
                    </div>
                            
                    <h2 id="mostraChatProfe">Chat Professores</h2>
                    <div class="container col-sm-8" id="formScrol">
                        <div id="history">
                
                           <!-- CONVERSAS BATE PAPO COM PROFESSORES-->

                        </div>
                        <hr>
                        <div class="d-flex justify-content" id="outro">
                            <div class="form mb-2 col-sm-5">
                                <textarea class="form-control" name="" id="texto" cols="20" rows="1"></textarea>
                                <button class="btn btn-primary " ­ type="button" id="bb">Enviar</button>

                            </div>

                        </div>
                        <form method="post" enctype="multipart/form-data" id="formDocChatProfe">
                           <input type="file" name="docChatProfe" id="inputFile"><button type="submit" class="btn btn-primary ">Enviar</button>
                        </form>
                    </div>

                </div>

                <!-- CHAT TURMA-->

                <div class="formChatTurma" id="formChatTurma" hidden>

                    <div class="col-auto" id="divBt">

                        <button class="btn-close" type="button" aria-label="Close" id="Close1" onclick="CloseChatTurma()"> </button>
                    </div>

                    <h2 id="mostraChatTurma">Chat Turma</h2>
                    <div id="formScrol" class="container col-md-8">
                        <div id="history" class="chatTurma">
                           <!--CONVERSAS BATE PAPO COM TURMAS--> 

                        </div>
                        <hr>
                        <div class="d-flex justify-content" id="outro">
                            <div class="form mb-2 col-sm-5">
                                <textarea class="form-control" name="" id="texto" cols="20" rows="1"></textarea>
                                <button class="btn btn-primary " ­ type="button" id="bb">Enviar</button>

                            </div>

                        </div>
                        <input type="file" name="" id="inputFile">
                    </div>

                </div>


                <!-- CHAT MINISTERIO-->

                <form class="formChatMinisterio" id="formChatMinisterio" hidden>

                    <div class="col-auto" id="divBt">

                        <button class="btn-close" type="button" aria-label="Close" id="Close1" onclick="CloseMenssagem()"> </button>
                    </div>

                    <h2>Chat Ministerio</h2>
                    <div class="container col-md-8" id="formScrol">
                        <div id="history">
                        <div id="mostraChat"></div>
                           

                        </div>
                        <hr>
                        <div class="d-flex justify-content" id="outro">
                            <div class="form mb-2 col-sm-5">
                                <textarea class="form-control" name="" id="textoEsc" cols="20" rows="1"></textarea>
                                <button class="btn btn-primary " ­ type="button" id="bb1">Enviar</button>

                            </div>

                        </div>
                        <input type="file" name="" id="inputFile">
                    </div>

                </form>






                <!--FORMULARIO MENSSAGEM TURMA-->

                <!-- COMUNICAÇÃO COM BASE DE DADOS -->

                <div class="formMenssagemTurma" id="formMenssagemTurma" hidden>
                    <?php 
                       $dados8 ="SELECT *FROM alunos";
                       $resultado8 = mysqli_query($conexao,$dados8);
                    
                    ?>

                    <div class="col-auto" id="divBt">

                        <button class="btn-close" type="button" aria-label="Close" id="Close1" onclick="CloseMenssagem()"> </button>
                    </div><br>
                    <div class="container-fluid  col-md-8" id="de">
                        <div id="divFormInfTurma">

                            <div class="divInf">


                                <select>
                                                                                        <option >Classe</option>
                                                                              </select>

                                <select>
                                                                                        <option >Turma</option>
                                                                               </select>

                                <select>
                                                                                             <option >Turno</option>
                                                                              </select>



                            </div>
                        </div>

                        <div class=" col-sm-12" >
                            <div class="d-flex justify-content-center py-3 " id="divMenu">

                                <div class="form-floating mb-2 col-sm-6">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Pesquisar">
                                    <label for="floatingInput">Pesquisar</label>
                                </div>
                                <div class="form-floating mb-1 col-sm-2">
                                    <button type="submit" class="btn btn-primary form " style="padding: 15px">Pesquisar</button>
                                </div>


                            </div><br>
                            <b class="dados">
                                                    <div class="mb-1  col-sm-50" id="scrolChatTurma">
                                                            <ul class="nav nav-pills flex-column mb-auto" id="main-menu">
                                                                    <?php while($result8 = mysqli_fetch_array($resultado8)){   ?>
                                                                        <li class="nav-item">
                                                                          <?php echo "<a href='#' data-idturma='$result8[idAluno]' data-idchatturma='$result8[nomeAluno]' class='nav-link text-white saltoChatTurma' aria-current='page' onclick='ChatTurma()'>";?>
                                                                         <?php echo $result8['id']." - ".$result8['idAluno']." - ".$result8['nomeAluno']."<br>"   ?>
                                                                
                                                                        </li>
                                                                        <?php }?>
                                                                </ul>
                                                           
                                                    </div>
                                                </b>






                        </div><br>
                    </div>
                    <br><br>




                </div>


                <!--FORMULARIO MENSSAGEM MINISTERIO-->

                <!-- COMUNICAÇÃO COM BASE DE DADOS -->

               


            </div>




        </div>


    </div>

    <!-- COMUNICAÇÃO COM BASE DE DADOS -->
    <div id="not">
        <img src="imagens/imgCentral/book.png" alt="" class="imgQuadro" id="imgQuadro">
    </div>


</body>

</html>

