<?php
// Verifica se o método de requisição é POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém o XML enviado pela página HTML
    $xml = file_get_contents("php://input");
    
    // Salva o XML no arquivo contacts.xml
    file_put_contents('contacts.xml', $xml);
    
    // Responde com uma mensagem de sucesso (pode ser personalizada)
    echo 'Alterações salvas com sucesso!';
} else {
    // Responde com um erro caso a requisição não seja do tipo POST
    header('HTTP/1.1 405 Method Not Allowed');
    echo 'Método não permitido';
}
