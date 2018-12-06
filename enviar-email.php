<?php
if (!empty($post['nome']) && !empty($_POST['email']) && !empty($_POST['mensagem'])) {
    $nome       = addslashes($_POST['nome']);
    $email      = addslashes($_POST['email']);  
    $mensagem   = addslashes($_POST['mensagem']);

    $para       = 'tc.thaylan@gmail.com';
    $assunto    = 'Contato portfólio';
    $corpo      = 'Nome: '.$nome. " - E-mail: ".$email." - Mensagem: ".$mensagem;

    // Informações para o servidor
    $cabecalho = "From: suporte@tc.com.br"."\r\n".
                 "Reply-to: ".$email."\r\n".
                 "X-Mailer: PHP/".phpversion();
                 
    mail($para, $assunto, $corpo, $cabecalho);
    
    header('Location: index.html');
    exit;
}