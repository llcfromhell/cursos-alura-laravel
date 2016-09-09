<!doctype html>
<html lang='pt-br'>
    <head>
        <meta charset='utf-8'>
        <link rel="stylesheet" href="/css/bootstrap.min.css">
    </head>
    <body>

        <div class="container">

            <h1>Detalhes do produto: <?= $p->nome ?> </h1>

            <ul>
                <li>
                    <b>Valor:</b> R$ <?= $p->valor ?> 
                </li>
                
                <li>
                    <b>Descrição:</b> <?= $p->descricao ?> 
                </li>
                
                <li>
                    <b>Quantidade em estoque:</b> <?= $p->quantidade ?>
                </li>
            </ul>

        </div>

    </body>
</html>