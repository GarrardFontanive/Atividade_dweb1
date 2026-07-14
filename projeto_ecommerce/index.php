<?php
// Carrega as funções reutilizáveis
require_once "funcoes.php";

// Define a página padrão como 'home'
$pagina = $_GET['p'] ?? 'home';
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto E-commerce</title>
    <link rel="stylesheet" href="https://unpkg.com/bamboo.css">
    <style>
        /* Ajustes simples de grid para simular o layout do Figma/Quadro */
        .grid-destaques { display: flex; flex-wrap: wrap; justify-content: space-around; }
        .produto-detalhe { display: flex; gap: 30px; margin-bottom: 30px; }
        .tabela-avaliacoes { width: 100%; border-collapse: collapse; margin-top: 15px; }
    </style>
</head>
<body>
    <div class="container">
        <?php 
        // 1. Inclui o cabeçalho
        include "cabecalho.php"; 
        ?>

        <main>
            <?php
            // 2. Roteamento (Front Controller)
            switch ($pagina) {
                case 'home':
                    include "paginas/home.php";
                    break;
                case 'produto':
                    include "paginas/produto.php";
                    break;
                case 'contato':
                    include "paginas/contato.php";
                    break;
                default:
                    echo "<h2>Página não encontrada (404)</h2>";
                    break;
            }
            ?>
        </main>

        <?php 
        // 3. Inclui o rodapé
        include "rodape.php"; 
        ?>
    </div>
</body>
</html>