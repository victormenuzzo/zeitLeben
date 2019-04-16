
<link rel="stylesheet" type="text/css" href="styleT.css">
<link rel="stylesheet" type="text/css" href="bgCss.css" />
<div class="texto">ZeitLeben - Cadastro</div>
<div class="login-page">
    <div class="qBranco" style="back-color:white;">
        <form action="#" method="post">
            <fieldset>
                <fieldset class="grupo">
                    <div class="campo">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome"  value="" style="width: 20em">
                    </div>
                </fieldset>
                <fieldset class="grupo">
                    <div class="campo">
                        <label for="diaNasc">Dia</label>
                        <input type="text" id="diaNasc" name="diaNasc" style="width: 5em" value="">
                    </div>
                    <div class="campo">
                        <label for="diaNasc">Mês</label>
                        <input type="text" id="mesNasc" name="mesNasc" style="width: 5em" value="">
                    </div>
                    <div class="campo">
                        <label for="diaNasc">Ano</label>
                        <input type="text" id="anoNasc" name="anoNasc" style="width: 5em" value="">
                    </div>
                </fieldset>


                

                <div class="campo">
                    <label for="email">RG</label>
                    <input type="text" id="rg" name="rg" style="width: 20em" value="">
                </div>
                <div class="campo">
                    <label for="telefone">CPF</label>
                    <input type="text" id="cpf" name="cpf" style="width: 20em" value="">
                </div>

                <fieldset class="grupo">
                    <div class="campo">
                        <label for="cidade">Cep</label>
                        <input type="text" id="cep" name="cep" style="width: 13em" value="">
                    </div>
                    <div class="campo">
                        <label for="cidade">Nº da casa</label>
                        <input type="text" id="numCasa" name="numCasa" style="width: 4em" value="">
                    </div>
                    <!--
                    <div class="campo">
                        <label for="estado">Estado</label>
                        <select name="estado" id="estado">
                            <option value="">--</option>
                            <option value="PR">PR</option>
                        </select>
                    </div>
                    -->
                </fieldset>

                <div class="campo">
                        <label for="cidade">Telefone</label>
                        <input type="text" id="telefone" name="telefone" style="width: 20em" value="">
                </div>
                
                <div class="campo">
                        <label for="cidade">Email</label>
                        <input type="text" id="email" name="email" style="width: 20em" value="">
                </div>
                <fieldset class="grupo">
                    <div class="campo">
                            <label for="alergia">Alergia</label>
                            <input type="text" id="alergias" name="alergias" style="width: 12em" value="">
                    </div>

                    <div class="campo">
                            <label for="cidade">Tipo Sanguineo</label>
                            <input type="text" id="tipoSanguineo" name="tipoSanguineo" style="width: 3em" value="">
                    </div>
                </fieldset>
                <div class="campo">
                            <label for="remedioControlado">Remédios Controlados</label>
                            <input type="text" id="remedioControlado" name="remedioControlado" style="width: 20em" value="">
                </div>
            
                <div class="campo">
                            <label for="login">Login</label>
                            <input type="text" id="login" name="login" style="width: 20em" value="">
                </div>
                    
                    <div class="campo">
                            <label for="remedioControlado">Senha</label>
                            <input type="password" id="senha" name="senha" style="width: 20em" value="">
                    </div>
                    
                <!--
                <div class="campo">
                    <label for="mensagem">Mensagem</label>
                    <textarea rows="6" style="width: 20em" id="mensagem" name="mensagem"></textarea>
                </div>
                -->

                <div class="campo">
                    <label for="plano">Plano De sáude</label>
                    <input type="text" id="plano" name="plano" style="width: 20em" value="">
                </div>
                <button class="button" type="submit" name="submit" value="submit">Enviar</button>

     
            </fieldset>
        </form>
    </div>
</div>
<?php

include 'Cadastro.class.php';
$botao = filter_input(INPUT_POST, 'submit', FILTER_SANITIZE_STRING);

    if (isset($botao)){
        $remedios = array($_POST['remedioControlado']);
        $alergias = array($_POST['alergias']);

        $paciente = new Cadastro();
        $paciente->cadastroPaciente($_POST['nome'], $_POST['diaNasc'], $_POST['mesNasc'], $_POST['anoNasc'], $_POST['rg'], $_POST['cpf'], $_POST['cep'], $_POST['numCasa'], $_POST['telefone'], $_POST['email'], $_POST['tipoSanguineo'], $alergias, $remedios ,$_POST['login'], $_POST['senha'], $_POST['plano']);
    }


?>