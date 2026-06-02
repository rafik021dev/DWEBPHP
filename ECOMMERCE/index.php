<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="https://unpkg.com/bamboo.css">
</head>
<body>
    <div class="container">
        <?php include "cabecalho.php"; ?>

        <main>
            <section id="banner">
                <img src="#" alt="Banner Principal" width="100%" height="200">
            </section>

            <section id="destaques">
                <article class="destaque_item">
                    <img src="#" alt="Destaque 1" width="100" height="100">
                    <p>Destaque 1</p>
                </article>
                <article class="destaque_item">
                    <img src="#" alt="Destaque 2" width="100" height="100">
                    <p>Destaque 2</p>
                </article>
                <article class="destaque_item">
                    <img src="#" alt="Destaque 3" width="100" height="100">
                    <p>Destaque 3</p>
                </article>
            </section>

            <section id="artigos">
                <article class="artigo_item">
                    <img src="#" alt="Imagem Artigo 1" width="50" height="50">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                </article>
                <article class="artigo_item">
                    <img src="#" alt="Imagem Artigo 2" width="50" height="50">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                </article>
            </section>

            <section id="galeria">
                <img src="#" alt="Item 1" width="50" height="50">
                <img src="#" alt="Item 2" width="50" height="50">
                <img src="#" alt="Item 3" width="50" height="50">
                <img src="#" alt="Item 4" width="50" height="50">
                <img src="#" alt="Item 5" width="50" height="50">
            </section>
        </main>

        <?php include "rodape.php"; ?>
    </div>
</body>
</html>