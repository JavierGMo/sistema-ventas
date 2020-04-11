<!DOCTYPE html>
<html lang="es">
<head>
    <title>Login - Sistema de Ventas</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Admin template that can be used to build dashboards for CRM, CMS, etc." />
    <meta name="author" content="Potenza Global Solutions" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- app favicon -->
    <link rel="shortcut icon" href="../../global/img/favicon.ico">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="../../global/css/vendors.css" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="../../global/css/style.css" />
    <!-- estilos personalizados -->
    <link rel="stylesheet" href="asset/css/login.css">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../../global/plugins/materialize/css/materialize.min.css"  media="screen,projection"/>
    <!-- sweet alerts -->
    <link rel="stylesheet" href="../../global/plugins/sweetalert2/sweetalert2.min.css">

</head>

<body class="bg-white">
    <!-- begin app -->
    <div class="app">
        <!-- begin app-wrap -->
        <div class="app-wrap">
            <!-- begin pre-loader -->
            <div class="loader">
                <div class="h-100 d-flex justify-content-center">
                    <div class="align-self-center">
                        <img src="../../global/img/loader/loader.svg" alt="loader">
                    </div>
                </div>
            </div>
            <!-- end pre-loader -->

            <!--start login contant-->
            <div class="app-contant">
                <div class="bg-white">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                            <div class="col-sm-6 col-lg-5 col-xxl-3  align-self-center order-2 order-sm-1">
                                <div class="d-flex align-items-center h-100-vh">
                                    <div class="login p-50">
                                        <h1 class="mb-2">Login</h1>
                                        <p>Porfavor escriba los datos correctamente para iniciar.</p>
                                        <form  class="mt-3 mt-sm-5" method="POST" id="formulario">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group" id="group-email">
                                                        <label class="control-label" id="text-email">Email*</label>
                                                        <input type="text" class="form-control" name="email" id="email" />
                                                        <small id="error-email" class="text-danger"></small>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group" id="group-contrasenia">
                                                        <label class="control-label" id="text-pass" >Contraseña*</label>
                                                        <input type="password" class="form-control" name="contrasenia" id="contrasenia" />
                                                        <small id="error-contrasenia" class="text-danger"></small>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="d-block d-sm-flex  align-items-center">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="gridCheck" id="gridCheck" value="mantener">
                                                            <label class="form-check-label" for="gridCheck">
                                                                Mantener Sesión
                                                            </label>
                                                        </div>
                                                        <a href="" class="ml-auto">Perdiste tu contraseña ?</a>
                                                    </div>
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <button class="waves-effect waves-light btn" id="btn-login">Iniciar Sesión</button>
                                                </div>
                                                <div class="col-12  mt-3">
                                                    <p>No tienes una cuenta ?<a href="registro.php"> Registrate</a></p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xxl-9 col-lg-7 bg-gradient o-hidden order-1 order-sm-2">
                                <div class="row align-items-center h-100">
                                    <div class="col-7 mx-auto ">
                                        <img class="img-fluid" src="../../global/img/bg/login.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end login contant-->
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->



    <!-- plugins -->
    <!-- jquery -->
    <script src="../../global/js/jquery.min.js"></script>
    
    <script src="../../global/js/vendors.js"></script>
    <!-- custom app -->
    <script src="../../global/js/app.js"></script>
     <!-- materialize -->
     <script src="../../global/plugins/materialize/js/materialize.min.js"></script>
     <!-- main ja-->
     <script src="asset/js/main.js"></script>
     <!-- importamos los sweetAlerts -->
     <script src="../../global/plugins/sweetalert2/sweetalert2.all.min.js"></script>
</body>


</html>