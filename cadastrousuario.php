<?php include('menu.php'); // ----- CARREGA O MENU ----- // ?> 

<?php include('default.php');  // ----- CARREGA A DEFAULT----- // ?>

<?php
require_once('../controller/ControleUsuario.php'); // ----- CARREGA O CONTROLE ----- //
Processo('incluir'); // ----- PASSA O PROCESSO AO CONTROLE ----- //
?>

<script src="js/Validacaoform.js"></script>

<div class="container">

    <form class="form-signin" action="" id="form" name="form" method="post">
        <h2 class="form-signin-heading"></h2>

        <div class="form-group">
            <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" required autofocus>
            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
            <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
        </div>


        <div class="form-group">
            <div>
                <input type="button" name="button" id="button" value="Cadastrar" class="btn btn-primary" onclick="validar(document.form);"/>
                <input type="hidden" name="ok" id="ok" />
            </div>
        </div>

    </form>

</div> <!-- /container -->