<?php
// Simulação de receção de dados pelo ID do produto
$id_produto = $_GET['id'] ?? 1;
?>

<div class="produto-detalhe">
    <div class="imagem-principal">
        <img src="https://via.placeholder.com/350" alt="Imagem do Produto" style="background: #eee; border: 1px solid #ccc;">
        <div style="display: flex; gap: 10px; margin-top: 10px;">
            <img src="https://via.placeholder.com/80" alt="Thumb 1">
            <img src="https://via.placeholder.com/80" alt="Thumb 2">
        </div>
    </div>
    <div class="informacoes">
        <h2>Produto Exemplo #<?php echo htmlspecialchars($id_produto); ?></h2>
        <p class="preco" style="font-size: 1.5em; color: #28a745; font-weight: bold;">€ 89,90</p>
        <p>Descrição detalhada do produto. Especificações técnicas, dimensões, garantia e informações adicionais essenciais para o consumidor no E-commerce.</p>
        <button style="background: #007bff; color: white; padding: 12px 30px; font-size: 1.2em; border: none; border-radius: 5px; cursor: pointer;">
            🛒 COMPRAR
        </button>
    </div>
</div>

<hr>

<section id="avaliacoes">
    <h3>Avaliações de Clientes</h3>
    <table class="tabela-avaliacoes">
        <thead>
            <tr style="background: #f8f9fa;">
                <th style="text-align: left; padding: 8px;">Nome</th>
                <th style="text-align: left; padding: 8px;">Comentário</th>
                <th style="text-align: left; padding: 8px;">Nota</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Gerar linhas de avaliações dinamicamente
            renderizarAvaliacao("Maria Silva", "Excelente produto! Chegou muito rápido e bem embalado.", 5);
            renderizarAvaliacao("João Santos", "O custo-benefício é ótimo, recomendo.", 4);
            ?>
        </tbody>
    </table>
</section>

<section id="duvidas-comentarios" style="margin-top: 30px; background: #fdfdfd; padding: 15px; border: 1px solid #eee;">
    <h3>Deixe a sua Dúvida ou Comentário</h3>
    <form action="" method="post" style="display: flex; flex-direction: column; gap: 10px; max-width: 500px;">
        <input type="text" name="nome" placeholder="O seu Nome" required style="padding: 8px;">
        <textarea name="comentario" rows="4" placeholder="Escreva a sua dúvida ou avaliação aqui..." required style="padding: 8px;"></textarea>
        <input type="submit" value="Enviar Comentário" style="background: #333; color: white; padding: 10px; border: none; cursor: pointer;">
    </form>
</section>