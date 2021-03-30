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
    <title>Inicio</title>
</head>
<body id="index">
    <?php
    $pg = "index";
    include_once("nav.php"); 
    ?>
    <header>
        <div class="container mt-5 mb-3">
            <div class="row">
                <div class="col-12 px-2 px-sm-0">
                    <h1>Inicio</h1>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="profileContainer">
                            <h2>Hola, mi nombre es Orlando y soy desarrollador full stack. | <i class="fas fa-search"></i></h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 mx-3 mx-sm-2 py-3 buttonContainer">
                        <a href="proyects.php"><button class="btn proyectsButton" type="button">MIRA MI TRABAJO</button></a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <div class="row mt-5">
                <div class="col-12 col-sm-3 text-center text-sm-left">
                    <a href="https://github.com/ojrl" title="Githup" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="https://linkedin.com" title="Linkedin" target="_blank"><i class="fab fa-linkedin"></i></a>
                </div>
                <div class="col-12 col-sm-3 text-center text-sm-left">
                    <a href="https://depcsuite.com/" target="_blank">DePC Suite</a>
                </div>
                <div class="col-12 col-sm-3 text-center text-sm-left">
                    <a href="ojrl93@gmail.com" target="_blank">ojrl93@gmail.com</a>
                </div>
                <div class="col-12 col-sm-3 px-2 px-sm-0 text-right">
                    <a href="https://api.whatsapp.com/send?phone=541154768187" title="Whatsapp" target="_blank"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>