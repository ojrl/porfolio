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
    <title>Sobre mí</title>
</head>
<body id="me">
    <?php
    $pg = "me";
    include_once("nav.php"); 
    ?>
    <header>
        <div class="container my-5">
            <div class="row">
                <div class="col-12 col-sm-6 px-2 px-sm-0">
                    <h1>Sobre mí</h1>
                    <p class="my-4">Soy programador junior, apasionado por la tecnología y la gestión de proyectos.</p>
                    <div class="row">
                        <div class="col-6">
                            <a href="https://github.com/ojrl" title="Githup" target="_blank"><i class="fab fa-github me-2"></i></a>
                            <a href="https://linkedin.com" title="Linkedin" target="_blank"><i class="fab fa-linkedin"></i></a>
                        </div>
                        <div class="col-6">
                            <a class="btn" href="curriculum.php">Descarga mi CV</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 px-2 px-sm-0">
                    <div class="profileContainer">
                        <img src="pictures/orlando-ramos.jpeg" alt="Orlando Ramos" title="Orlando Ramos">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="knowledgesSection">
            <div class="container">
                <div class="row py-5">
                    <div class="col-12 px-0 pb-5">
                        <h2>Tecnologías de programación</h2>
                    </div>
                    <div class="col-6 col-sm-2 mb-4">
                        <div class="card align-items-center py-5">
                            <p class="mb-0">Git</p>
                            <img src="pictures/git-icon.png" alt="Git">
                        </div>
                    </div> 
                    <div class="col-6 col-sm-2 mb-4">
                        <div class="card align-items-center py-5">
                            <p class="mb-0">HTML5</p>
                            <img src="pictures/html5-icon.png" alt="HTML5">
                        </div>
                    </div> 
                    <div class="col-6 col-sm-2 mb-4">
                        <div class="card align-items-center py-5">
                            <p class="mb-0">CSS</p>
                            <img src="pictures/css-icon.png" alt="CSS">
                        </div>
                    </div> 
                    <div class="col-6 col-sm-2 mb-4">
                        <div class="card align-items-center py-5">
                            <p class="mb-0">Bootstrap</p>
                            <img src="pictures/bootstrap-icon.png" alt="Bootstrap">
                        </div>
                    </div> 
                    <div class="col-6 col-sm-2 mb-4">
                        <div class="card align-items-center mx-0 px-4 py-5">
                            <p class="mb-0">Javascript</p>
                            <img src="pictures/javascript-icon.jpeg" alt="Javascript">
                        </div>
                    </div> 
                    <div class="col-6 col-sm-2 mb-4">
                        <div class="card align-items-center py-5">
                            <p class="mb-0">jQuery</p>
                            <img src="pictures/jquery-icon.jpg" alt="jQuery">
                        </div>
                    </div> 
                    <div class="col-6 col-sm-2 mb-4">
                        <div class="card align-items-center py-5">
                            <p class="mb-0">Laravel</p>
                            <img src="pictures/laravel-icon.png" alt="Laravel">
                        </div>
                    </div> 
                    <div class="col-6 col-sm-2 mb-4">
                        <div class="card align-items-center py-5">
                            <p class="mb-0">Apache</p>
                            <img class="apacheIcon"src="pictures/apache.icon.png" alt="Apache">
                        </div>
                    </div> 
                    <div class="col-6 col-sm-2 mb-4">
                        <div class="card align-items-center mx-0 px-4 py-5">
                            <p class="mb-0">PHP</p>
                            <img src="pictures/php-icon.jpg" alt="PHP">
                        </div>
                    </div> 
                    <div class="col-6 col-sm-2 mb-4">
                        <div class="card align-items-center py-5">
                            <p class="mb-0">MySQL</p>
                            <img src="pictures/mysql-icon.png" alt="MySQL">
                        </div>
                    </div> 
                    <div class="col-6 col-sm-2 mb-4">
                        <div class="card align-items-center py-5">
                            <p class="mb-0">React.js</p>
                            <img src="pictures/reac-js-icon.png" alt="React.js">
                        </div>
                    </div> 
                    <div class="col-6 col-sm-2 mb-4">
                        <div class="card align-items-center py-5">
                            <p class="mb-0">Mercadopago</p>
                            <img src="pictures/mercadopago-icon.jpg" alt="PMercadopago">
                        </div>
                    </div> 
                </div>
            </div>
        </section>
        <section class="skillsSection py-5">
            <div class="container">
                <div class="row justify-content-between px-2 px-sm-0">
                    <div class="col-12 col-sm-6 shadow my-2 skillContainer">
                        <div class="row">
                            <div class="col-4 iconSkillContainer py-4">
                                <i class="fas fa-comment-alt py-3"></i>
                            </div>
                            <div class="col-8 ps-3 pt-5">
                                <div>
                                    <h2 class="mb-1">IDIOMAS</h2>
                                    <ul>
                                        <li>ESPAÑOL: Nativo</li>
                                        <li>INGLÉS: Básico</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 shadow my-2 skillContainer">
                        <div class="row">
                            <div class="col-4 iconSkillContainer py-4">
                                <i class="fas fa-star py-3"></i>
                            </div>
                            <div class="col-8 pt-5 ps-3">
                                <div>
                                    <h2 class="mb-1">HOBBIES</h2>
                                    <ul>
                                        <li>Ejercicios</li>
                                        <li>Videojuegos</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="experienceSection py-5">
            <div class="container">
                <div class="row px-2 px-sm-0">
                    <div class="col-2 pb-5">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="col-10 px-4 px-sm-1 py-3">
                        <h2>Experiencia Laboral</h2>
                    </div>
                </div>
                <div class="row justify-content-between align-items-center mb-5 px-2 px-sm-0">
                    <div class="col-12 col-sm-6 shadow my-2 my-sm-0 experienceContainer">
                        <div class="row">
                            <div class="col-4 py-2">
                                <i class="fas fa-building py-2"></i>
                            </div>
                            <div class="col-8 py-3">
                                <div>
                                    <h3 class="mb-1">Auditor Junior</h3>
                                    <h4>Arellano Investigación de Marketing </h4>
                                    <p>3 meses</p>
                                    <p class="workDescription">- Control de inventarios.<br>- Registro de documentos de compra.<br>- Análisis y reporte de ventas mensuales.<br>- Busqueda de nuevas contrataciones.</p>

                                </div>
                            </div>
                            <div class="row justify-content-end pb-3">
                                <div class="col-4">
                                    <a class="btn" href="https://www.arellano.pe/" target="_blank">Ver empresa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 shadow my-2 my-sm-0 experienceContainer">
                        <div class="row">
                            <div class="col-4 py-2">
                                <i class="fas fa-building py-3"></i>
                            </div>
                            <div class="col-8 py-3">
                                <div>
                                    <h3 class="mb-1">Agente de Migración</h3>
                                    <h4>SAIME</h4>
                                    <p>4 años y 3 meses</p>
                                    <p class="workDescription">- Revisión de documentos de pasajeros en vuelos internacionales.<br>- Chequeo de pasajeros en sistema.<br>- Control de movimientos migratorios.</p>
                                </div>
                            </div>
                            <div class="row justify-content-end pb-3">
                                <div class="col-4">
                                    <a class="btn" href="http://www.saime.gob.ve/" target="_blank">Ver empresa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="studiesSection py-5">
            <div class="container">
                <div class="row px-2 px-sm-0">
                    <div class="col-2 pb-5">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="col-10 px-4 px-sm-1 py-3">
                        <h2>Estudios Realizados</h2>
                    </div>
                </div>
                <div class="row justify-content-between align-items-center px-2 px-sm-0">
                    <div class="col-12 col-sm-6 shadow my-2 my-sm-0 studiesContainer">
                        <div class="row">
                            <div class="col-4 py-2">
                                <i class="fas fa-book py-3"></i>
                            </div>
                            <div class="col-8 py-3">
                                <div>
                                    <h3 class="mb-1">TSU Administración Aduanera</h3>
                                    <h4>Universidad Simón Bolívar</h4>
                                    <p>3 años</p>
                                    <p class="studieDescription">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, magnam.</p>
                                </div>
                            </div>
                            <div class="row justify-content-end pb-3">
                                <div class="col-4">
                                    <a class="btn" href="http://www.usb.ve/" target="_blank">Ver empresa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 shadow my-2 my-sm-0 studiesContainer">
                        <div class="row">
                            <div class="col-4 py-2">
                                <i class="fas fa-book py-3"></i>
                            </div>
                            <div class="col-8 py-3">
                                <div>
                                    <h3 class="mb-1">Desarrollador Web Full Stack</h3>
                                    <h4>DepcSuite</h4>
                                    <p>6 meses</p>
                                    <p class="studieDescription">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure incidunt quidem sit nobis asperiores minima doloribus provident repudiandae ad, vitae aut.</p>
                                </div>
                            </div>
                            <div class="row justify-content-end pb-3">
                                <div class="col-4">
                                    <a class="btn" href="https://depcsuite.com/" target="_blank">Ver empresa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
    include_once("footer.php"); 
    ?>
</body>
</html>