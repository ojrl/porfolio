<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Font-awesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/Font-awesome/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/bootstrap.min.js"></script>
    <title>Proyectos</title>
</head>
<body id="proyects">
    <?php
    $pg = "proyects";
    include_once("nav.php"); 
    ?>
    <header>
        <div class="container mt-5 mb-3">
            <div class="row">
                <div class="col-12 px-2 px-sm-0">
                    <h1>Mis proyectos</h1>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row my-3">
                <div class="col-12 px-2 px-sm-0">
                    <p>Los siguientes proyectos son algunos de los trabajos que he realizado:</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-4 px-2 px-sm-0">
                    <div class="row card m-1 me-0 me-sm-2 shadow">
                        <img class="img-fluid p-2" src="pictures/abmclientes.png" alt="Proyecto I">
                        <div class="col-12 colorGradiente py-3">
                            <h2>abm clientes</h2>
                        </div>
                        <div class="col-12 py-3">
                            <p>Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap y Json.</p>
                        </div>
                        <div class="col-12 py-3">
                            <div class="row pt-3 pb-0">
                                <div class="col-6">
                                    <a href="" class="btn" target="_blank">Ver online</a>
                                </div>
                                <div class="col-6">
                                    <a href="" class="colorLink" target="_blank">Código fuente</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 px-2 px-sm-0">
                    <div class="row card m-1 mx-0 mx-sm-2 shadow">
                        <img class="img-fluid shadow p-2" src="pictures/abmventas.png" alt="Proyecto II">
                        <div class="col-12 colorGradiente py-3">
                            <h2>sistema de gestión de ventas</h2>
                        </div>
                        <div class="col-12 py-3">
                            <p>ASistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                        </div>
                        <div class="col-12 py-3">
                            <div class="row pt-3 pb-0">
                                <div class="col-6">
                                    <a href="" class="btn" target="_blank">Ver online</a>
                                </div>
                                <div class="col-6">
                                    <a href="" class="colorLink" target="_blank">Código fuente</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 px-2 px-sm-0">
                    <div class="row card m-1 ms-0 ms-sm-2 shadow">
                        <img class="img-fluid shadow p-2" src="pictures/sistema-admin.png" alt="Proyecto III">
                        <div class="col-12 colorGradiente py-3">
                            <h2>proyecto integrador</h2>
                        </div>
                        <div class="col-12 py-3">
                            <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines.</p>
                        </div>
                        <div class="col-12 py-3">
                            <div class="row pt-3 pb-0">
                                <div class="col-6">
                                    <a href="" class="btn" target="_blank">Ver online</a>
                                </div>
                                <div class="col-6">
                                    <a href="" class="colorLink" target="_blank">Código fuente</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
    include_once("footer.php"); 
    ?>
</body>
</html>