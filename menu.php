<!DOCTYPE html>
<html lang="en">

    <?php include('default.php'); ?>

    <body>

        <div class="container">

            <div class="masthead">
                <h3>PROJETO</h3>
                <nav>

                    <?php
                    $estilo = "";

                    if ($_GET["pg"] == "inicio")
                        $estilo = "class=\"active\"";
                    elseif ($_GET["pg"] == "cadastrar")
                        $estilo2 = "class=\"active\"";
                    elseif ($_GET["pg"] == "login")
                        $estilo3 = "class=\"active\"";
                      elseif ($_GET["pg"] == "consultar")
                        $estilo4 = "class=\"active\"";
                    ?>


                    <ul class="nav nav-justified">
                        <li <?php echo $estilo; ?>><a href="index.php?pg=inicio">INICIO</a></li>
                        <li <?php echo $estilo2; ?>><a href="cadastrousuario.php?pg=cadastrar">CADASTRAR</a></li>
                        <li <?php echo $estilo3; ?>><a href="login.php?pg=login">LOGIN</a></li>
                        <li <?php echo $estilo4; ?>><a href="consultarusuario.php?pg=consultar">CONSULTAR</a></li>

                    </ul>
                </nav>
            </div>
        </div>

    </body>

</html>
