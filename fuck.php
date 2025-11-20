<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Handle preflight requests
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Sua chave de API da Supercell
// Você precisa obter uma em: https://developer.clashroyale.com/
// IMPORTANTE: Substitua 'YOUR_API_KEY_HERE' pela sua chave de API real
$apiKey = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6IjQ3NDZkZGFhLTM2MDYtNDJiNC05ZTcyLWQzNTUwNTVjZWY0NSIsImlhdCI6MTc2MzU5ODE3MCwic3ViIjoiZGV2ZWxvcGVyLzI3YWFkZGZiLWY2NWItYTY3YS0yMjA5LTFjODViMTM1MGFhMCIsInNjb3BlcyI6WyJyb3lhbGUiXSwibGltaXRzIjpbeyJ0aWVyIjoiZGV2ZWxvcGVyL3NpbHZlciIsInR5cGUiOiJ0aHJvdHRsaW5nIn0seyJjaWRycyI6WyIxMDMuMjEwLjc4LjI1MCJdLCJ0eXBlIjoiY2xpZW50In1dfQ.APCGXIcJ-3BaYM4QPlda7WNOJFDyprUOqF5HFjaXVhSoORfFuRn6VJ7NGjij9a8Vwfrv9BfDcZ3MZ2R5zfu0NQ';

// Verifica se a chave de API foi configurada
if ($apiKey === 'YOUR_API_KEY_HERE' || empty($apiKey)) {
    http_response_code(500);
    echo json_encode([
        'error' => 'API key not configured',
        'reason' => 'missingApiKey',
        'message' => 'Please configure your API key in fuck.php. See API_SETUP.md for instructions.'
    ]);
    exit();
}

// Verifica se a tag do jogador foi enviada
if (!isset($_POST['player_tag']) && !isset($_GET['player_tag'])) {
    http_response_code(400);
    echo json_encode([
        'error' => 'Player tag is required',
        'reason' => 'missingParameter'
    ]);
    exit();
}

// Obtém a tag do jogador
$playerTag = isset($_POST['player_tag']) ? $_POST['player_tag'] : $_GET['player_tag'];
$playerTag = trim($playerTag);

// Valida e formata a tag do jogador
$playerTag = str_replace('#', '', $playerTag);
$playerTag = trim($playerTag);

// Validação básica: a tag deve conter apenas letras e números
if (empty($playerTag) || !preg_match('/^[A-Z0-9]+$/i', $playerTag)) {
    http_response_code(400);
    echo json_encode([
        'error' => 'Invalid player tag format',
        'reason' => 'invalidTag',
        'message' => 'Player tag must contain only letters and numbers'
    ]);
    exit();
}

$playerTag = '#' . strtoupper($playerTag);

// URL-encode a tag (substitui # por %23)
$encodedTag = urlencode($playerTag);

// Endpoint da API oficial do Clash Royale
$apiUrl = "https://api.clashroyale.com/v1/players/{$encodedTag}";

// Configuração da requisição cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer ' . $apiKey,
    'Accept: application/json'
]);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);

// Executa a requisição
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlError = curl_error($ch);
curl_close($ch);

// Verifica erros de cURL
if ($curlError) {
    http_response_code(500);
    echo json_encode([
        'error' => 'Connection error',
        'reason' => 'curlError',
        'message' => $curlError
    ]);
    exit();
}

// Verifica o código HTTP
if ($httpCode === 404) {
    http_response_code(404);
    echo json_encode([
        'error' => 'Player not found',
        'reason' => 'notFound',
        'message' => 'The player tag does not exist'
    ]);
    exit();
}

if ($httpCode === 403) {
    http_response_code(403);
    echo json_encode([
        'error' => 'Forbidden',
        'reason' => 'invalidApiKey',
        'message' => 'Invalid API key or API key expired'
    ]);
    exit();
}

if ($httpCode !== 200) {
    http_response_code($httpCode);
    $errorData = json_decode($response, true);
    echo json_encode([
        'error' => 'API error',
        'reason' => $errorData['reason'] ?? 'unknown',
        'message' => $errorData['message'] ?? 'Unknown error occurred'
    ]);
    exit();
}

// Decodifica a resposta JSON
$playerData = json_decode($response, true);

if (json_last_error() !== JSON_ERROR_NONE) {
    http_response_code(500);
    echo json_encode([
        'error' => 'Invalid JSON response',
        'reason' => 'parseError'
    ]);
    exit();
}

// Retorna os dados do jogador
echo json_encode($playerData);
?>

