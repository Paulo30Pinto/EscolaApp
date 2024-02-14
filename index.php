<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <script type="text/javascript" src="js/js1.js"></script> -->
    <script type="text/javascript" src="bibliotecas/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/RequisicaoLogin.js"></script>
    <script src="bibliotecas/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/AdmiEscola.css ">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bibliotecas/bootstrap.min.css">
    <link rel="stylesheet" href="css/signin.css">


    <title>Index</title>


</head>

<body class="text-center">



<div id="menuBt" class="container-fluid">

    <div class="col-md-12 mx-auto col-lg-6" id="Login">
        <h1 id="s">SchoCia</h1>
        <div class="p-4 p-md-12 border rounded-3 bg-light" >
            <button class="btn btn-primary" onclick="chamaAluno()">Entrar como Aluno</button>
            <button class="btn btn-primary" onclick="chamaEscola()">Entrar como Administrador da Escola</button>
            <button class="btn btn-primary" onclick="chamaProfessor()">Entrar como Professor</button>
        </div>
    </div>
</div>




    <!-- FORMULARIO DA ESCOLA -->
<div class="container-fluid" id="formLoginEscola" hidden>
                    <div class="container col-auto" id="divBt" style="margin-top:-120px!important;">

                        <button class="btn-close" type="button" aria-label="Close" id="Close1" style="margin-top:-100px!important;" onclick="CloseLogin()"> </button>
                    </div><br>

         <div class="col-md-10 mx-auto col-lg-4" id="Login">
             <div class="p-4 p-md-5 border rounded-3 bg-light">
                  <img class="mb-4" src="IMG/User_icon-up.png" alt="" width="72" height="57">
                 <h1 class="h3 mb-3 fw-normal">Login Escola</h1>
                   <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="idLoginEscola" placeholder="Número Id">
                    <label for="floatingInput">Número Id da Escola</label>
                  </div>
                  <div class="form-floating mb-3">
                     <input type="password" class="form-control" id="passLoginEscola" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                 </div>
                <div class="checkbox mb-3">
                   <label>
                   <input type="checkbox" value="remember-me"> Remember me
                   </label>
                </div>
                   <button  class="w-100 btn btn-lg btn-primary" type="submit" id="btLoginEscola">Entrar</button>

                 <hr class="my-4">
                 <small class="text-muted" id="alertaLogin"></small>
           </div>
       </div>
       

      


</div>
<div class="container" id="mostraLoginEscola" hidden>

    
</div>





    <!-- FORMULARIO DO ALUNO -->
<div class="container-fluid" id="formLoginAluno" hidden>
                    <div class="container col-auto" id="divBt" style="margin-top:-120px!important;">

                        <button class="btn-close" type="button" aria-label="Close" id="Close1" style="margin-top:-100px!important;" onclick="CloseLogin()"> </button>
                    </div><br>

            <div class="col-md-10 mx-auto col-lg-4" id="Login">

               <div class="p-4 p-md-5 border rounded-3 bg-light">
                   <img class="mb-4" src="IMG/User_icon-up.png" alt="" width="72" height="57">
                   <h1 class="h3 mb-3 fw-normal">Login Estudante</h1>
                   <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="idAluno" placeholder="Número Id">
                      <label for="floatingInput">Número Id</label>
                   </div>
                   <div class="form-floating mb-3">
                     <input type="password" class="form-control" id="passAluno" placeholder="Password">
                     <label for="floatingPassword">Password</label>
                   </div>
                   <div class="checkbox mb-3">
                     <label>
                      <input type="checkbox" value="remember-me"> Remember me
                      </label>
                    </div>
                     <button class="w-100 btn btn-lg btn-primary"  id="enviar">Entrar</button>

                      <hr class="my-4">
                     <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
                </div>
  
            </div>

          
</div>

<div class="container" id="mostraLoginAluno" hidden></div>


<!-- FORMULARIO PROFESSOR -->


<div class="container-fluid" id="formLoginProfe" hidden>

    
                    <div class="container col-auto" id="divBt" style="margin-top:-120px!important;">

                        <button class="btn-close" type="button" aria-label="Close" id="Close1" style="margin-top:-100px!important;" onclick="CloseLogin()"> </button>
                    </div><br>


                    
                    <div class="col-md-10 mx-auto col-lg-4" id="Login">
        <div class="p-4 p-md-5 border rounded-3 bg-light">
            <img class="mb-4" src="IMG/User_icon-up.png" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Login Professor</h1>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="idProfe" placeholder="Número Id">
                <label for="floatingInput">Número Id </label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="passProfe" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="checkbox mb-3">
                <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
            </div>
            <button  class="w-100 btn btn-lg btn-primary" type="submit" id="enviarProfe">Entrar</button>

            <hr class="my-4">
            <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
        </div>
    </div>


</div>

<div class="container" id="mostraLoginProfe" hidden></div>



</body>



</html>
