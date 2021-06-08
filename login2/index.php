<!DOCTYPE html>
<html>

<head>
        <title> Sistema de Login </title>
        <meta charset="utf-8">
        <meta name="author" content="Maurício Santos da Silveira">
        <meta name="description" content="Sistema de Login">
        <meta name="keywords" content="">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <?php
                        if($_SERVER['REQUEST_METHOD']=="POST"){

                            $nome = $_POST["nome"];
                            $senha = $_POST['senha'];

                            if($nome=="mauricio" && $senha=="1234"){
                            $senha=sha1($senha);
                            $file=fopen("nomeesenha.txt", 'a');
                            $str_nomeesenha="$nome|$senha \n";
                            
                                if(fwrite($file,$str_nomeesenha)){
                                    echo "<b><font color='#FF0000'> Logado com Sucesso </font></b>";

                                    }
                            
                                }else
                                    echo "<b><font color='#FF0000'> Falha no Login </font></b>";
                                
                            }                  
?>
            
                <div id="form">
                                    <h1>Sistema de Login</h1>
                    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
                    <input pattern="^[a-zA-Z]+$" required="required" type="text" id="nome" name="nome" placeholder="Informe seu nome" />
                    <input  pattern="^[a-zA-Z0-9]+$"  required="required" type="password" id="senha" name="senha" placeholder="Informe sua senha" />
                    <input type="submit" value="enviar" name="enviar" id="enviar"/>
    
                    </form>
</body>



</html>
