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
                <th>Nascimento</th>
                <th>Ações</th>
            </tr>
        </thead>

        <?php
        foreach ($user as $userinfo) : ?>
            <tr id="<?php echo 'line' . $userinfo['id'] ?>">
                <td><?php echo  $userinfo['name'] ?></td>
                <td><?php echo  $userinfo['username'] ?></td>
                <td><?php echo  $userinfo['email'] ?></td>
                <td><?php echo  date_format(date_create($userinfo['BirthDate']), 'd/m/Y') ?></td>
                <td>
                    <?php if ($userinfo['active'] == 1) { ?>

                        <a href="/user/edit/<?php echo $userinfo['id'] ?>" class="edit">Editar</a>
                        <a href="/user/delete/<?php echo $userinfo['id'] ?>" class="edit red">Desativar</a>

                    <?php } else { ?>

                        <a href="/user/delete/<?php echo $userinfo['id'] ?>" class="edit normal">Ativar</a>
                        
                    <?php } ?>

                </td>
            </tr>
    <?php endforeach;
    } else {
        echo 'no data';
    }
    ?>
</table>
<!-- <script src="/assets/js/edit.js"></script> -->