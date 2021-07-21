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
    <title>Contacto</title>
</head>
<body id="contact">
    <?php
    $pg = "contact";
    include_once("nav.php"); 
    ?>
    <header>
        <div class="container mt-5 mb-3">
            <div class="row">
                <div class="col-12 px-2 px-sm-0">
                    <h1>Contacto</h1>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section>
            <div class="container">
                <div class="row my-3">
                    <div class="col-12 col-sm-6 px-2 px-sm-0 pt-0">
                        <p>Te invito a que te contactes enviándome un correo o a través de <a href="https://api.whatsapp.com/send?phone=541154768187" target="_blank">whatsapp</a></p>
                    </div>
                    <div class="col-12 col-sm-6 px-2 px-sm-0 pt-0">
                        <form action="" method="post" class="pt-0">
                            <div class="my-2 px-2 px-sm-0">
                                <input type="text" name="txtName" id="txtName" class="form-control shadow py-2" placeholder="Nombre" required>
                            </div>
                            <div class="my-2 px-2 px-sm-0">
                                <input type="email" name="txtEmail" id="txtEmail" class="form-control shadow py-2" placeholder="Correo" required>
                            </div>
                            <div class="my-2 px-2 px-sm-0">
                                <textarea name="txtMessage" id="txtMessage" class="form-control shadow" placeholder="Comentarios" required></textarea>
                            </div>
                            <div class="row my-3 justify-content-between">
                                <div class="col-10 mx-3 mx-sm-2 px-2 px-sm-0 whiteContainer">
                                    <input type="checkbox" name="chkNotRobot" id="chkNotRobot" required>
                                    <label for="chkNotRobot" class="form-check-label">No soy un Robot</label>
                                </div>
                                <div class="col-2 mx-3 mx-sm-2 px-2 px-sm-0">
                                    <button class="btn submitButton" type="submit">ENVIAR</button>
                                </div>
                            </div>
                        </form>
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
