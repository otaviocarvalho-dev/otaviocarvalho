<?php

    $name = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $numero = addslashes($_POST['numero']);

    $destino = "otaviocarvalhodonascimento@gmail.com";
    $assunto = "Formulário - Portfólio Otavio Carvalho";

    $corpo = "Nome: ".$name."\n"."Email: ".$email."\n"."Celular: ".$numero;

    $cabeca = "From: otaviocarvalhodonascimento@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($destino,$assunto,$corpo,$cabeca)){
        echo("Sua mensagem foi enviada ao Otavio Carvalho com sucesso!");
    }else{
        echo("Houve um erro ao enviar a mensagem ao Otavio Carvalho!");
    }

?>