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
    <link rel="stylesheet" href="asset/css/registro.css">
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
                                    <div class="register p-5">
                                        <h3 class="mb-2">Registrate</h3>
                                        <p>Porfavor verifique que los campos sean validos y reales.</p>
                                        <form  class="mt-2 mt-sm-5" method="POST" id="formulario">
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group" id="group-nombres">
                                                        <label class="control-label" id="text-nombres" >Nombre (s)</label>
                                                        <input type="text" class="form-control" id="nombres" name="nombres" />
                                                        <small class="text-danger" id="error-nombres"></small>
                                                    </div> 
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group" id="group-apellidos">
                                                        <label class="control-label" id="text-apellidos">Apellidos (s)</label>
                                                        <input type="text" class="form-control" id="apellidos" name="apellidos" />
                                                        <small class="text-danger" id="error-apellidos"></small>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group" id="group-email">
                                                        <label class="control-label" id="text-email">Email</label>
                                                        <input type="email" class="form-control" id="email" name="email" >
                                                        <small class="text-danger" id="error-email"></small>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group" id="group-telefono">
                                                        <label class="control-label" id="text-telefono">Telefono</label>
                                                        <input type="text" class="form-control" id="telefono" name="telfono"/>
                                                        <small class="text-danger" id="error-telefono"></small>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group" id="group-contrasenia">
                                                        <label class="control-label" id="group-contrasenia">Contraseña</label>
                                                        <input type="password" name="contrasenia" id="contrasenia" class="form-control"/>
                                                        <small class="text-danger" id="error-contrasenia"></small>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="gridCheck" id="gridCheck">
                                                        <label class="form-check-label" for="gridCheck">
                                                            Acepto los Terminos y Condiciones
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <button class="btn btn-primary text-uppercase" id="btn-registro">Registrarme</button>
                                                </div>
                                                <div class="col-12  mt-3">
                                                    <p>Ya tienes una cuenta ?<a href="login.php"> Inicia</a></p>
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
     <script src="asset/js/registro.js"></script>
     <!-- importamos los sweetAlerts -->
     <script src="../../global/plugins/sweetalert2/sweetalert2.all.min.js"></script>
</body>


</html>