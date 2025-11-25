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
        <?php foreach($usuarios as $usuario) ?>
        <tr>
            <td><?php echo htmlspecialchars($usuario['id'])?></td>
            <td><?php echo htmlspecialchars($usuario['nome'])?></td>
            <td><?php echo htmlspecialchars($usuario['login'])?></td>
            <td><a href="editar_usuario.php?id=<?php echo urlencode($usuario['id'])?>"></a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>