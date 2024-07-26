<?php
require_once __DIR__.'/../interfaces/interfacesFigura.php';

session_start();

if (!isset($_SESSION['desenhador'])) {
    $_SESSION['desenhador'] = new Desenhador();
}

$desenhador = $_SESSION['desenhador'];
$response = ['message' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = array_merge($_POST, json_decode(file_get_contents('php://input'), true));
    switch ($data['action']) {
        case 'createSquare':
            $desenhador->criarQuadrado($data['side']);
            $response['message'] = 'Quadrado adicionado com sucesso!';
            break;
        case 'createCircle':
            $desenhador->criarCirculo($data['radius']);
            $response['message'] = 'Círculo adicionado com sucesso!';
            break;
        case 'createTriangle':
            $desenhador->criarTriangulo($data['base'], $data['height'], $data['side1'], $data['side2'], $data['side3']);
            $response['message'] = 'Triângulo adicionado com sucesso!';
            break;
        case 'createRectangle':
            $desenhador->criarRetangulo($data['width'], $data['height']);
            $response['message'] = 'Retângulo adicionado com sucesso!';
            break;
        case 'calculateAreas':
            $response = $desenhador->calculaAreas();
            break;
        case 'calculatePerimeters':
            $response = $desenhador->calculaPerimetros();
            break;
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
