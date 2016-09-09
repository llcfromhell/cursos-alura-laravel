<html>
  <head>
  
  <link href="/css/bootstrap.min.css"/ rel="stylesheet">
  
  </head>
  <body>
    <div class="container">
        <h1>Listagem de produtos</h1>
        <table class="table table-striped table-bordered table-hover">
        <?php foreach ($produtos as $p): ?>
        <tr>
            <td><?= $p->nome ?></td>
            <td><?= $p->valor ?></td>
            <td><?= $p->descricao ?></td>
            <td><?= $p->quantidade ?></td>
        </tr>
        <?php endforeach ?>
        </table>
    </div>
  </body>
</html>