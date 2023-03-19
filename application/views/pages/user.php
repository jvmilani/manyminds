<h1>Fornecedores</h1>
<div class="filters-header">
    <select class="search-bar" name="status_user" id="status_user">
        <option value="0">Desativados</option>
        <option value="1">Ativados</option>
        <option value="2" selected>Todos</option>
    </select>
    <div>
        <input class="search-bar" type="text">
        <button class="search-bar">Pesquisar</button>
    </div>
</div>

<table>
    <?php if (is_array($user) && count($user) > 0) { ?>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Login</th>
                <th>E-mail</th>
            </tr>
        </thead>

        <?php

        foreach ($user as $userinfo) : ?>
            <tr>
                <td><?php echo  $userinfo['name'] ?></td>
                <td><?php echo  $userinfo['username'] ?></td>
                <td><?php echo  $userinfo['email'] ?></td>
            </tr>
    <?php endforeach;
    } else {
        echo 'no data';
    }
    ?>
</table>