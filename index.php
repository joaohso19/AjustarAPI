<?php require_once __DIR__ . '/includes/functions.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StreamList</title>
    <link rel="stylesheet" href="/streamlist/assets/style.css">
</head>
<body>
    <?php include __DIR__ . '/includes/header.php'; ?>
    <main class="container">
        <section class="hero">
            <h1>Organize seus <span>filmes e séries</span> em um só lugar</h1>
            <p>
                O StreamList é a sua vitrine pessoal de streaming. Adicione o que você já assistiu,
                o que está assistindo e o que pretende assistir, dê uma nota e escreva sua review.
                A capa oficial aparece automaticamente quando você digita o título.
            </p>
            <div class="acoes">
                <?php if (isset($_SESSION['id'])) { ?>
                    <a class="btn" href="/streamlist/app/read.php">Ver minha vitrine</a>
                    <a class="btn-sec" href="/streamlist/app/create.php">Adicionar título</a>
                <?php } else { ?>
                    <a class="btn" href="/streamlist/login/cadastrar.php">Começar agora</a>
                    <a class="btn-sec" href="/streamlist/login/login.php">Já tenho conta</a>
                <?php } ?>
            </div>
        </section>

        <section class="recursos">
            <div class="recurso">
                <h3>Adicione títulos</h3>
                <p>Filme ou série, com status, nota e review.</p>
            </div>
            <div class="recurso">
                <h3>Capas automáticas</h3>
                <p>Digite o nome e escolha a capa encontrada pela API.</p>
            </div>
            <div class="recurso">
                <h3>Vitrine organizada</h3>
                <p>Filtre por status e edite ou remova quando quiser.</p>
            </div>
        </section>
    </main>
    <?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
