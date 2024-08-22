<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nomeCliente = $_POST['txtNome'];
    $valorCompra = floatval($_POST['txtValorCompra']);
    $formaPagamento = $_POST['cmbPag'];

    // Calcula o desconto com base na forma de pagamento
    switch ($formaPagamento) {
        case 'boleto':
            $desconto = 0.08;  // 8% de desconto
            break;
        case 'deposito':
            $desconto = 0.10;  // 10% de desconto
            break;
        case 'cartaoCredito':
        default:
            $desconto = 0;  // Sem desconto
            break;
    }

    $valorDesconto = $valorCompra * $desconto;
    $valorFinal = $valorCompra - $valorDesconto;

    // Define a mensagem de promoção com base na forma de pagamento
    if ($formaPagamento == 'cartaoCredito') {
        $mensagemPromocional = 'Aproveite nossa promoção de aniversário! Neste mês, oferecemos descontos especiais para pagamentos via Boleto e Depósito.';
        $classeDesconto = 'no-discount'; // Classe para o caso sem desconto
    } else {
        $mensagemPromocional = 'Promoção de Aniversário! Aproveite, ' . htmlspecialchars($nomeCliente) . '!';
        $classeDesconto = 'promotion'; // Classe para o caso com desconto
    }

    // Exibe o resultado formatado
    echo '<link rel="stylesheet" href="styles.css">';
    echo '<div class="result-container ' . $classeDesconto . '">';
    echo '<div class="promotion-header">' . $mensagemPromocional . '</div>';
    echo "Nome do Cliente: $nomeCliente<br>";
    echo "Valor da Compra: R$ " . number_format($valorCompra, 2, ',', '.') . "<br>";
    echo "Forma de Pagamento: " . ucfirst($formaPagamento) . "<br>";
    echo "Valor Final com Desconto: R$ " . number_format($valorFinal, 2, ',', '.') . "<br>";
    if ($desconto > 0) {
        echo '<div class="economy-details">Desconto aplicado: ' . ($desconto * 100) . '%<br>';
        echo "Você economizou: R$ " . number_format($valorDesconto, 2, ',', '.') . "</div>";
    } else {
        echo '<div class="economy-details no-discount-details">Desconto aplicado: 0%<br>';
        echo "Você economizou: R$ 0,00</div>";
    }
    echo '</div>';
}
?>
