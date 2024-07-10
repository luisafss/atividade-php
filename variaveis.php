<?php

function lerNotas() {
    $notas = [];
    for ($i = 1; $i <= 4; $i++) {
        echo "Digite a nota $i: ";
        $nota = trim(fgets(STDIN));
        array_push($notas, $nota);
    }
    return $notas;
}

function calcularPontuacaoTotal($notas) {
    return array_sum($notas);
}

function calcularMedia($notas) {
    return array_sum($notas) / count($notas);
}

function calcularAreaRetangulo() {
    echo "Digite a largura do retângulo (m): ";
    $largura = trim(fgets(STDIN));
    echo "Digite o comprimento do retângulo (m): ";
    $comprimento = trim(fgets(STDIN));
    return $largura * $comprimento;
}

function calcularDiferenca($valor1, $valor2) {
    return abs($valor1 - $valor2);
}

function calcularDivisao($valor1, $valor2) {
    if ($valor2 == 0) {
        return "Divisão por zero não é permitida.";
    }
    return $valor1 / $valor2;
}

function converterPesoParaGramas($pesoKg) {
    return $pesoKg * 1000;
}

function calcularValorRefeicao($pesoPrato) {
    $precoPorKg = 45.00;
    return $pesoPrato * $precoPorKg;
}

function converterFahrenheitParaCelsius($fahrenheit) {
    return ($fahrenheit - 32) / 1.8;
}

function calcularCircunferencia($raio) {
    $diametro = 2 * $raio;
    $comprimento = 2 * pi() * $raio;
    $area = pi() * pow($raio, 2);
    return [$diametro, $comprimento, $area];
}

function inverterValores(&$valor1, &$valor2) {
    $temp = $valor1;
    $valor1 = $valor2;
    $valor2 = $temp;
}

// Exemplo de execução das funções:

// Notas
$notas = lerNotas();
echo "Pontuação total: " . calcularPontuacaoTotal($notas) . PHP_EOL;
echo "Média: " . calcularMedia($notas) . PHP_EOL;

// Área do retângulo
echo "Área do retângulo: " . calcularAreaRetangulo() . " m²" . PHP_EOL;

// Diferença entre valores
echo "Digite o primeiro valor: ";
$valor1 = trim(fgets(STDIN));
echo "Digite o segundo valor: ";
$valor2 = trim(fgets(STDIN));
echo "Diferença: " . calcularDiferenca($valor1, $valor2) . PHP_EOL;

// Divisão
echo "Divisão: " . calcularDivisao($valor1, $valor2) . PHP_EOL;

// Peso em gramas
echo "Digite o peso em quilos: ";
$pesoKg = trim(fgets(STDIN));
echo "Peso em gramas: " . converterPesoParaGramas($pesoKg) . " g" . PHP_EOL;

// Valor da refeição
echo "Digite o peso do prato em quilos: ";
$pesoPrato = trim(fgets(STDIN));
echo "Valor a pagar: R$" . calcularValorRefeicao($pesoPrato) . PHP_EOL;

// Conversão de temperatura
echo "Digite a temperatura em Fahrenheit: ";
$fahrenheit = trim(fgets(STDIN));
$celsius = converterFahrenheitParaCelsius($fahrenheit);
echo "Temperatura: $celsius °C e $fahrenheit °F" . PHP_EOL;

// Circunferência
echo "Digite o valor do raio: ";
$raio = trim(fgets(STDIN));
list($diametro, $comprimento, $area) = calcularCircunferencia($raio);
echo "Diâmetro: $diametro, Comprimento: $comprimento, Área: $area" . PHP_EOL;

// Inverter valores
echo "Digite o primeiro valor inteiro: ";
$valor1 = trim(fgets(STDIN));
echo "Digite o segundo valor inteiro: ";
$valor2 = trim(fgets(STDIN));
inverterValores($valor1, $valor2);
echo "Valores invertidos: Valor 1: $valor1, Valor 2: $valor2" . PHP_EOL;

?>

