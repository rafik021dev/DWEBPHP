<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sakura.css/css/sakura.css" type="text/css">
</head>
<body>
    <div class="container">
        <?php include "cabecalho.php"; ?>

        <!-- Professor, coloquei os banners, destaques e etc como cinza pra evitar precisar colocar imagens-->
        <main>
            <section id="banner">
                <div style="width: 100%; height: 200px; background-color: lightgray;"></div>
            </section>

            <hr>

            <section id="destaques" style="display: flex; flex-direction: row; justify-content: space-between; gap: 20px; text-align: center; margin-bottom: 40px;">
    
                <article class="destaque_item" style="flex: 1;">
                    <div style="width: 100%; height: 150px; background-color: lightgray; border-radius: 8px;"></div>
                    <h3>Destaque 1</h3>
                </article>

                <article class="destaque_item" style="flex: 1;">
                    <div style="width: 100%; height: 150px; background-color: lightgray; border-radius: 8px;"></div>
                    <h3>Destaque 2</h3>
                </article>

                <article class="destaque_item" style="flex: 1;">
                    <div style="width: 100%; height: 150px; background-color: lightgray; border-radius: 8px;"></div>
                    <h3>Destaque 3</h3>
                </article>

            </section>

            <hr>

            <section id="artigos">
                <article class="artigo_item">
                    <div style="width: 50px; height: 50px; background-color: lightgray;"></div>
                    <h4>Artigo 1</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore omnis numquam alias.</p>
                </article>
                <br>
                <article class="artigo_item">
                    <div style="width: 50px; height: 50px; background-color: lightgray;"></div>
                    <h4>Artigo 2</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore omnis numquam alias.</p>
                </article>
            </section>

            <hr>

            <section id="galeria">
                <div style="width: 50px; height: 50px; display: inline-block; background-color: lightgray;"></div>
                <div style="width: 50px; height: 50px; display: inline-block; background-color: lightgray;"></div>
                <div style="width: 50px; height: 50px; display: inline-block; background-color: lightgray;"></div>
                <div style="width: 50px; height: 50px; display: inline-block; background-color: lightgray;"></div>
                <div style="width: 50px; height: 50px; display: inline-block; background-color: lightgray;"></div>
            </section>
        </main>

        <?php include "rodape.php"; ?>
    </div>
</body>
</html>