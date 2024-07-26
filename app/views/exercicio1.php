<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desenhador de Figuras</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            margin-right: 10px;
        }
        #result {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Desenhador de Figuras</h1>
        
        <div class="form-group">
            <label for="figureType">Escolha uma figura:</label>
            <select id="figureType">
                <option value="">Selecione</option>
                <option value="square">Quadrado</option>
                <option value="circle">Círculo</option>
                <option value="triangle">Triângulo</option>
                <option value="rectangle">Retângulo</option>
            </select>
        </div>

        <div id="figureInputs"></div>

        <button onclick="addFigure()">Adicionar Figura</button>
        <button onclick="calculateAreas()">Calcular Áreas</button>
        <button onclick="calculatePerimeters()">Calcular Perímetros</button>

        <div id="result"></div>
    </div>
    <script src="app/js/post.js"></script>
</body>
</html>

