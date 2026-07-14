<?php
function renderizarProduto($id, $titulo, $imagem, $descricao, $preco) {
    echo '
    <div class="destaque_item" style="border: 1px solid #ccc; padding: 15px; margin: 10px; text-align: center;">
        <h3>' . htmlspecialchars($titulo) . '</h3>
        <img src="' . htmlspecialchars($imagem) . '" alt="' . htmlspecialchars($titulo) . '" width="150" height="150" style="background: #eee;">
        <p>' . htmlspecialchars($descricao) . '</p>
        <p><strong>Preço: € ' . number_format($preco, 2, ',', '.') . '</strong></p>
        <a href="index.php?p=produto&id=' . urlencode($id) . '" style="display: inline-block; padding: 8px 15px; background: #28a745; color: white; text-decoration: none; border-radius: 4px;">Ver Detalhes</a>
    </div>';
}

function renderizarAvaliacao($nome, $comentario, $nota) {
    echo '
    <tr>
        <td style="padding: 8px; border-bottom: 1px solid #ddd;"><strong>' . htmlspecialchars($nome) . '</strong></td>
        <td style="padding: 8px; border-bottom: 1px solid #ddd;">' . htmlspecialchars($comentario) . '</td>
        <td style="padding: 8px; border-bottom: 1px solid #ddd;">' . str_repeat('★', $nota) . str_repeat('☆', 5 - $nota) . '</td>
    </tr>';
}
?>