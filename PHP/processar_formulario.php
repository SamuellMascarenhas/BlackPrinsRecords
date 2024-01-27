<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receba os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    // Aqui você pode realizar qualquer ação desejada com os dados do formulário.
    // Por exemplo, você pode enviar um e-mail com esses dados.

    // Exemplo de envio de e-mail (substitua os detalhes do remetente e destinatário):
    $to = "versestvcontato@gmail.com";
    $subject = "Mensagem do Formulário de Contato - BlackPrins Records";
    $message = "Nome: $nome\n";
    $message .= "E-mail: $email\n";
    $message .= "Mensagem:\n$mensagem";

    $headers = "De: $email";

    // Você pode usar a função mail para enviar o e-mail (certifique-se de configurar seu servidor de e-mail):
    // mail($to, $subject, $message, $headers);

    // Exibindo uma mensagem de confirmação
    echo "Obrigado por entrar em contato, $nome! Sua mensagem foi enviada com sucesso.";
} else {
    // Redireciona se alguém tentar acessar este script diretamente sem usar o formulário
    header("Location: formulario_de_contato.html");
    exit();
}
?>
