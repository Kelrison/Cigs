<!DOCTYPE html>

<head>

    <meta charset="utf-8">
    <link rel="icon" href="img/CigsFinal.gif"/>
  

    <title>S G D I S | Login de Acesso</title>

    
    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" /> 
    <link rel="stylesheet" href="css/font-awesome.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/datepicker3.css" />
    <!-- Specific Page Vendor CSS --> 
    <link rel="stylesheet" href="css/pnotify.custom.css" />
    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/css-login.css" />
    <!-- Skin CSS -->
    <link rel="stylesheet" href="css/default.css" />
    <!-- Head Libs -->
    <script src="js/modernizr.js"></script>
     
  
</head>

<body class="loading-overlay-showing" data-loading-overlay>
    <div class="loading-overlay dark">
        <div class="loader white"></div>
    </div>
    <!-- start: page -->
      
    <section class="body-sign">
     <img id="logo-login" src="img/escudo_armas.jpg" alt="Logo do Sistema"/>                  
        <div class="center-sign">
            <a class="logo pull-left">
                <img src="img/CigsFinal.gif" height="54" alt="Logo S G D I S" />
            </a>

            <div class="panel panel-sign">
                <div class="panel-title-sign mt-xl text-right">
                    <h2 class="title text-uppercase text-bold m-none"></i> Login</h2>
                </div>
                <div class="panel-body">
                    <form class="m-t j_formLogin" role="form" method="post" action="validalogin.php" id="form-login">
                        <div class="form-group mb-lg">
                            <label class="pull-left">Usuário </label> <span class="j_user text-danger"></span>
                            <div class="input-group input-group-icon">
                                <input type="text" class="form-control input-lg j_username" placeholder="Usuário" name="username" id="username">
                                
                            </div>
                        </div>

                        <div class="form-group mb-lg">
                            <div class="clearfix">
                                <label class="pull-left">Senha </label><span class="j_pass text-danger"></span>
                            </div>
                            <div class="input-group input-group-icon">
                                <input type="password" class="form-control input-lg j_password" placeholder="Senha" name="password" id="password">
                                
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-8">
                                <div class="checkbox-custom checkbox-default">

                                    <div class="j_retorno">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 text-right">
                                <button type="submit" class="btn btn-warning hidden-xs" onclick="home.php">Acessar</button>
                            </div>
                        </div>

                        <div class="mb-xs text-center text-warning text-bold">
                            <br>Para recuperação de senha, entre em contato com a STI</br>
                        </div>

                    </form>
                </div>
            </div>



            <p class="text-center text-muted mt-md mb-md">&copy; Copyright 2017 - 2018. All Rights Reserved.</p>
        </div>


    </section>
    <!-- end: page -->
    <!-- Vendor -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery.browser.mobile.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/nanoscroller.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/magnific-popup.js"></script>
    <script src="js/jquery.placeholder.js"></script>

    <!-- Specific Page Vendor -->
    <script src="js/pnotify.custom.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="js/theme.js"></script>

    <!-- Theme Initialization Files -->
    <script src="js/theme.init.js"></script>

    <!-- Examples -->
    <script src="js/notificacoes.js"></script>

</body>
</html>
