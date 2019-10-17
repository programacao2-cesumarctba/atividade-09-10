<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>usuario CI</title>
</head>
  <body>
    <h1>Usuários</h1>
    <a href="/User/add">Cadastrar</a>
    <table>
        <thead>
        <tr>
            <td>Nome</td>
            <td>Email</td>
            <td>Ações</td>
        </tr>
        </thead>
<?php foreach ($userList as $p): ?>
    <tr>
        <td><?= $p->name ?></td>
        <td><?= $p->email ?></td>
        <td>
            <a href="/User/edit?id=<?= $p->id ?>">Editar</a>
            <a href="/User/delete?id=<?= $p->id ?>">Excluir</a>
        </td>
    </tr>


  </li>


  <?php endforeach ; ?>
</ul>
  </body>
</html>
