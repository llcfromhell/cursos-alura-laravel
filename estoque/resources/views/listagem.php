<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/app.css" type="text/css" />
    </head>
    <body>
        <div class="container">
            
            <div class="panel panel-default">
                
                <div class="panel-heading">Listagem de produtos</div>
                
                <div class="panel-body">
                    <table class="table table-striped">
                        
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
                
            </div>
            
        </div>
    </body>
</html>