<?php
// Simulação básica de envio do formulário de contato
$mensagem_sucesso = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['acao']) && $_POST['acao'] === 'contato') {
    // Aqui você processaria ou salvaria os dados em um banco no futuro
    $mensagem_sucesso = true;
}
?>

<div style="max-width: 800px; margin: 0 auto; padding: 20px;">
    <h2 style="text-align: center; margin-bottom: 10px;">Fale Conosco & Atendimento</h2>
    <p style="text-align: center; color: #666; margin-bottom: 30px;">
        Escolha o melhor canal para falar com a nossa equipe de suporte.
    </p>

    <?php if ($mensagem_sucesso): ?>
        <div style="background: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin-bottom: 25px; border: 1px solid #c3e6cb;">
            <strong>Mensagem enviada com sucesso!</strong> A nossa equipe responderá em breve via e-mail ou chat.
        </div>
    <?php endif; ?>

    <div style="display: flex; flex-wrap: wrap; gap: 30px; justify-content: space-between;">
        
        <div style="flex: 1; min-width: 300px; background: #fdfdfd; padding: 20px; border: 1px solid #eee; border-radius: 8px;">
            <h3 style="margin-top: 0;">Enviar uma Mensagem</h3>
            <form action="index.php?p=contato" method="post" style="display: flex; flex-direction: column; gap: 12px;">
                <input type="hidden" name="acao" value="contato">
                
                <label>
                    <strong>Nome Completo:</strong><br>
                    <input type="text" name="nome" required placeholder="Ex: João da Silva" style="width: 100%; padding: 8px; margin-top: 4px; box-sizing: border-box;">
                </label>
                
                <label>
                    <strong>E-mail de Contato:</strong><br>
                    <input type="email" name="email" required placeholder="Ex: joao@email.com" style="width: 100%; padding: 8px; margin-top: 4px; box-sizing: border-box;">
                </label>
                
                <label>
                    <strong>Assunto:</strong><br>
                    <select name="assunto" style="width: 100%; padding: 8px; margin-top: 4px; box-sizing: border-box;">
                        <option value="duvida">Dúvida sobre Produto</option>
                        <option value="pedido">Status do Pedido</option>
                        <option value="troca">Trocas e Devoluções</option>
                        <option value="outro">Outro Assunto</option>
                    </select>
                </label>
                
                <label>
                    <strong>Mensagem:</strong><br>
                    <textarea name="mensagem" rows="5" required placeholder="Escreva detalhadamente como podemos ajudar..." style="width: 100%; padding: 8px; margin-top: 4px; box-sizing: border-box;"></textarea>
                </label>
                
                <input type="submit" value="Enviar Mensagem" style="background: #007bff; color: white; padding: 10px; border: none; border-radius: 4px; font-weight: bold; cursor: pointer; margin-top: 5px;">
            </form>
        </div>

        <div style="flex: 1; min-width: 280px; display: flex; flex-direction: column; gap: 20px;">
            
            <div style="background: #f0f9ff; padding: 20px; border: 1px solid #bae6fd; border-radius: 8px; text-align: center;">
                <h3 style="margin-top: 0; color: #0369a1;">Chat Online</h3>
                <p style="font-size: 0.95em; color: #334155;">
                    Precisa de uma resposta imediata? Fale agora mesmo com um de nossos atendentes no suporte ao vivo.
                </p>
                <div style="margin: 15px 0; font-size: 0.9em; color: #16a34a;">
                    ● <strong>Atendentes Disponíveis</strong> (Tempo médio: 2 min)
                </div>
                <a href="https://wa.me/5500000000000?text=Olá,%20gostaria%20de%20ajuda%20no%20E-commerce" target="_blank" style="display: inline-block; width: 80%; background: #25d366; color: white; padding: 12px; text-decoration: none; border-radius: 5px; font-weight: bold;">
                    Iniciar Chat via WhatsApp
                </a>
            </div>

            <div style="background: #f8f9fa; padding: 20px; border: 1px solid #ddd; border-radius: 8px;">
                <h4 style="margin-top: 0;">Horário de Atendimento</h4>
                <ul style="padding-left: 20px; margin-bottom: 0; color: #555; font-size: 0.95em;">
                    <li><strong>Segunda a Sexta:</strong> 08h às 20h</li>
                    <li><strong>Sábados:</strong> 09h às 14h</li>
                    <li><strong>Domingos e Feriados:</strong> Fechado</li>
                </ul>
            </div>

        </div>

    </div>
</div>