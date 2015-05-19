<?php
require_once("./config/database.php");
require_once("topo.html");

$nome=filter_input(INPUT_POST, 'nome');
$email=filter_input(INPUT_POST, 'email');
$assunto=filter_input(INPUT_POST, 'assunto');
$mensagem=filter_input(INPUT_POST, 'mensagem');

if(isset($nome)){
    ?>
    <div class="alert alert-info" role="alert">Enviado com sucesso!</div>
    <div class="alert-info" role="alert">
        Nome  : <?=$nome;?>;
        E-mail  : <?=$email;?>;
        Assunto : <?=$assunto?>;
        Mensagem : <?=$mensagem?>;

    </div>
    <?
    }
?>

    <form method="post" action="contato.php" class="form-control-static" style="margin-left:20px" >
        <fieldset>
           <legend>Contato</legend>

             <div class="control-group">
                <label class="control-label" for="nome">Nome</label>
                <div class="controls">
                    <input size="40px" id="nome" name="nome" type="text" placeholder="" class="input-xlarge" required="">

                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="email">E-mail</label>
                <div class="controls">
                    <input size="40px"  id="email" name="email" type="text" placeholder="" class="input-xlarge" required="">

                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="assunto">Assunto</label>
                <div class="controls">
                    <input  size="40px"  id="assunto" name="assunto" type="text" placeholder="" class="input-xlarge" required="">

                </div>
            </div>

            <div class="control-group">
                    <label class="control-label" for="mensagem">Mensagem</label>
                    <div class="controls">
                    <textarea cols="42"  id="mensagem" name="mensagem"></textarea>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="enviar"></label>
                <div class="controls">
                    <button id="enviar" name="enviar" class="btn btn-primary" type="submit">Enviar</button>
                </div>
            </div>

        </fieldset>
    </form>
<?php
require_once("rodape.php");
?>
