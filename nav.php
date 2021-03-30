<nav class="navbar navbar-expand-sm">
    <div class="container my-0 my-sm-2 px-2 px-sm-0">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerButton" aria-controls="navbarTogglerButton" aria-expanded="false" aria-label="Toggle navigation"><span><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarTogglerButton">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php echo $pg == "index" ? "active" : ""; ?>" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $pg == "me" ? "active" : ""; ?>" href="me.php">Sobre mí</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $pg == "proyects" ? "active" : ""; ?>" href="proyects.php">Proyectos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $pg == "contact" ? "active" : ""; ?>" href="contact.php">Contacto</a>
                </li>
            </ul>
            <div class="my-2 my-sm-0">
                <a class="btn" href="">Descarga mi CV <i class="fas fa-download"></i></a>
            </div>
        </div>
    </div>
</nav>