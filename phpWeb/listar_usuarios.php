<?php 
require_once "index.php";
$usuarios = list_usuarios();
?>
<div class="container">
    <h1>Lista de usuarios</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Login</th>
        </tr>
        <?php foreach($usuarios as $usuarios) ?>
        <tr>
            <td><?php echo htmlspecialchars($usuarios['id'])?></td>
            <td><?php echo htmlspecialchars($usuarios['nome'])?></td>
            <td><?php echo htmlspecialchars($usuarios['login'])?></td>
            <td><a href="editar_usuario.php?id=<?php echo urlencode($usuarios['id'])?>"></a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>