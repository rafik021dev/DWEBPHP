<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Produto</title>
    <link rel="stylesheet" href="https://unpkg.com/bamboo.css">
</head>
<body>
    <div class="container">
        <?php include "cabecalho.php"; ?>

        <main>
            <section id="produto_detalhes">
                <div>
                    <img src="#" alt="Imagem do Produto" width="250" height="250">
                    <div>
                        <img src="#" alt="Miniatura 1" width="50" height="50">
                        <img src="#" alt="Miniatura 2" width="50" height="50">
                    </div>
                </div>
                <div>
                    <h2>Nome do Produto</h2>
                    <p>Descrição do produto em linhas. Funcionalidades, especificações, etc.</p>
                    <button type="button">COMPRAR</button>
                </div>
            </section>

            <hr>

            <section id="avaliacoes">
                <h3>AVALIAÇÕES</h3>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Usuário</th>
                            <th>Nota</th>
                            <th>Opinião</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Cliente A</td>
                            <td>5/5</td>
                            <td>Excelente!</td>
                        </tr>
                        <tr>
                            <td>Cliente B</td>
                            <td>4/5</td>
                            <td>Muito bom, mas demorou.</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <hr>

            <section id="comentarios">
                <h3>DÚVIDAS / COMENTÁRIOS</h3>
                <form action="" method="post">
                    <div>
                        <label for="nome">NOME:</label><br>
                        <input type="text" id="nome" name="nome">
                    </div>
                    <br>
                    <div>
                        <label for="comentario">COMENTÁRIO:</label><br>
                        <textarea id="comentario" name="comentario" rows="4" cols="40"></textarea>
                    </div>
                    <br>
                    <button type="submit">OK</button>
                </form>
            </section>
        </main>

        <?php include "rodape.php"; ?>
    </div>
</body>
</html>