<section id="banner" style="background: #e9ecef; height: 150px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
    <h2>[ Área de Banner Promocional ]</h2>
</section>

<h2>Destaques do Dia</h2>
<section id="destaques" class="grid-destaques">
    <?php
    // Utilização da função PHP para gerar os componentes sem repetição de HTML
    renderizarProduto(1, "Portátil Gaming", "https://via.placeholder.com/150", "Portátil de alta performance para jogos e trabalho.", 1200.00);
    renderizarProduto(2, "Auscultadores Bluetooth", "https://via.placeholder.com/150", "Cancelamento de ruído ativo e bateria de 30h.", 89.90);
    renderizarProduto(3, "Teclado Mecânico", "https://via.placeholder.com/150", "Switch RGB e teclas programáveis.", 65.50);
    ?>
</section>