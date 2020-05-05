<nav class="navbar navbar-expand-md navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="background-color: grey;"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo $pg == "inicio"? "active": ""; ?>" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $pg == "sobre-mi"? "active": ""; ?>"href="sobre-mi.php">Sobre mi <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $pg == "proyecto"? "active": ""; ?>"href="portfolio.php">Proyectos <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $pg == "contacto"? "active": ""; ?>"href="contacto.php">Contacto <span class="sr-only">(current)</span></a>
                    </li>

                </ul>

            </div>
</nav>