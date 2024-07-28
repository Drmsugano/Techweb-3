<?php
    require __DIR__."/app/interfaces/interfacesFigura.php";
    require __DIR__."/app/model/Desenhador.php";
    function mostrarMenu() {
        echo "1. Criar Quadrado\n";
        echo "2. Criar Círculo\n";
        echo "3. Criar Triângulo\n";
        echo "4. Criar Retângulo\n";
        echo "5. Calcular Áreas\n";
        echo "6. Calcular Perímetros\n";
        echo "7. Sair\n";
    }
    
    $desenhador = new Desenhador();
    
    do {
        mostrarMenu();
        $opcao = trim(fgets(STDIN));
    
        switch ($opcao) {
            case 1:
                echo "Digite o lado do quadrado: ";
                $lado = trim(fgets(STDIN));
                $desenhador->criarQuadrado($lado);
                break;
            case 2:
                echo "Digite o raio do círculo: ";
                $raio = trim(fgets(STDIN));
                $desenhador->criarCirculo($raio);
                break;
            case 3:
                echo "Digite a base do triângulo: ";
                $base = trim(fgets(STDIN));
                echo "Digite a altura do triângulo: ";
                $altura = trim(fgets(STDIN));
                echo "Digite o tamanho do lado 1 do triângulo: ";
                $lado1 = trim(fgets(STDIN));
                echo "Digite o tamanho do lado 2 do triângulo: ";
                $lado2 = trim(fgets(STDIN));
                echo "Digite o tamanho do lado 3 do triângulo: ";
                $lado3 = trim(fgets(STDIN));
                $desenhador->criarTriangulo($base, $altura,$lado1,$lado2,$lado3);
                break;
            case 4:
                echo "Digite a largura do retângulo: ";
                $largura = trim(fgets(STDIN));
                echo "Digite a altura do retângulo: ";
                $altura = trim(fgets(STDIN));
                $desenhador->criarRetangulo($largura, $altura);
                break;
            case 5:
                $desenhador->calculaArea();
                break;
            case 6:
                $desenhador->calculaPerimetro();
                break;
            case 7:
                echo "Saindo...\n";
                break;
            default:
                echo "Opção inválida!\n";
                break;
        }
    } while ($opcao != 7);
