<header style="border-bottom: 2px solid #333; padding-bottom: 10px; margin-bottom: 20px;">
    <div class="logo">
        <h2>E-Commerce Demo</h2>
    </div>
    <nav>
        <ul style="list-style: none; display: flex; gap: 15px; padding: 0;">
            <li><a href="index.php?p=home">Home</a></li>
            <li><a href="index.php?p=contato">Fale Conosco</a></li>
        </ul>
        <div class="search">
            <form action="index.php" method="get">
                <input type="hidden" name="p" value="home">
                <input type="text" name="buscar" id="buscar" placeholder="Pesquisar produtos...">
                <input type="submit" value="Ok">
            </form>
        </div>
    </nav>
</header>