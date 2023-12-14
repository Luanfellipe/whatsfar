<?php

// Função para fazer chamadas à API do Bitrix24
function callBitrixAPI($method, $params = array()) {
    $api_url = 'https://cesccursos.bitrix24.com.br/rest/7/1dwotxcx6vf32ynu/';

    // Construa a URL da chamada da API
    $url = $api_url . $method . '?' . http_build_query($params);

    // Faça a chamada à API usando cURL
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    // Decodifique a resposta JSON
    $result = json_decode($response, true);

    return $result;
}

// Exemplo de chamada à API para obter informações de um contato específico
$contact_id = 42; // Substitua pelo ID do contato desejado
$api_method = 'crm.contact.get';
$params = array('ID' => $contact_id);

$contact_info = callBitrixAPI($api_method, $params);

// Exemplo de impressão das informações do contato
if ($contact_info && isset($contact_info['result'])) {
    echo "Nome do Contato: " . $contact_info['result']['NAME'] . "<br>";
    echo "Email do Contato: " . $contact_info['result']['EMAIL'][0]['VALUE'] . "<br>";
} else {
    echo "Erro ao obter informações do contato.";
}

?>
