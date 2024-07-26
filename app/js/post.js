function displayInputs() {
    const figureType = document.getElementById('figureType').value;
    const inputsContainer = document.getElementById('figureInputs');

    let html = '';

    switch (figureType) {
        case 'square':
            html = `
                <label for="squareSide">Lado do quadrado:</label>
                <input type="number" id="squareSide" step="0.01">
            `;
            break;
        case 'circle':
            html = `
                <label for="circleRadius">Raio do círculo:</label>
                <input type="number" id="circleRadius" step="0.01">
            `;
            break;
        case 'triangle':
            html = `
                <label for="triangleBase">Base do triângulo:</label>
                <input type="number" id="triangleBase" step="0.01">
                <label for="triangleHeight">Altura do triângulo:</label>
                <input type="number" id="triangleHeight" step="0.01">
                <label for="triangleSide1">Lado 1 do triângulo:</label>
                <input type="number" id="triangleSide1" step="0.01">
                <label for="triangleSide2">Lado 2 do triângulo:</label>
                <input type="number" id="triangleSide2" step="0.01">
                <label for="triangleSide3">Lado 3 do triângulo:</label>
                <input type="number" id="triangleSide3" step="0.01">
            `;
            break;
        case 'rectangle':
            html = `
                <label for="rectangleWidth">Largura do retângulo:</label>
                <input type="number" id="rectangleWidth" step="0.01">
                <label for="rectangleHeight">Altura do retângulo:</label>
                <input type="number" id="rectangleHeight" step="0.01">
            `;
            break;
        default:
            break;
    }

    inputsContainer.innerHTML = html;
}

function addFigure() {
    const figureType = document.getElementById('figureType').value;
    const data = new FormData();

    switch (figureType) {
        case 'square':
            data.append('action', 'createSquare');
            data.append('side', document.getElementById('squareSide').value);
            break;
        case 'circle':
            data.append('action', 'createCircle');
            data.append('radius', document.getElementById('circleRadius').value);
            break;
        case 'triangle':
            data.append('action', 'createTriangle');
            data.append('base', document.getElementById('triangleBase').value);
            data.append('height', document.getElementById('triangleHeight').value);
            data.append('side1', document.getElementById('triangleSide1').value);
            data.append('side2', document.getElementById('triangleSide2').value);
            data.append('side3', document.getElementById('triangleSide3').value);
            break;
        case 'rectangle':
            data.append('action', 'createRectangle');
            data.append('width', document.getElementById('rectangleWidth').value);
            data.append('height', document.getElementById('rectangleHeight').value);
            break;
        default:
            alert('Selecione uma figura.');
            return;
    }

    fetch('app/controller/backend.php', {
        method: 'POST',
        body: data
    })
    .then(response => response.json())
    .then(result => {
        document.getElementById('figureInputs').innerHTML = '';
        document.getElementById('figureType').value = '';
        alert(result.message);
    });
}

function calculateAreas() {
    fetch('app/controller/backend.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ action: 'calculateAreas' })
    })
    .then(response => response.json())
    .then(result => {
        const resultDiv = document.getElementById('result');
        resultDiv.innerHTML = '<h2>Áreas das Figuras:</h2>';
        result.forEach((item, index) => {
            resultDiv.innerHTML += `<p>Figura ${index + 1}: Área = ${item.toFixed(2)}</p>`;
        });
    });
}
function calculatePerimeters() {
    fetch('app/controller/backend.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ action: 'calculatePerimeters' })
    })
    .then(response => response.json())
    .then(result => {
        const resultDiv = document.getElementById('result');
        resultDiv.innerHTML = '<h2>Perímetros das Figuras:</h2>';
        result.forEach((item, index) => {
            resultDiv.innerHTML += `<p>Figura ${index + 1}: Perímetro = ${item.toFixed(2)}</p>`;
        });
    });
}
document.getElementById('figureType').addEventListener('change', displayInputs);