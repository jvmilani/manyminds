<h1>Produtos</h1>
<table>
    <?php if (is_array($product) && count($product) > 0) { ?>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <?php
        foreach ($product as $productinfo) : ?>
            <tr>
                <td><?php echo  $productinfo['title'] ?></td>
                <td><?php echo  $productinfo['quantity'] ?></td>
                <td><?php echo 'R$' . number_format($productinfo['price'], 2, ',', '.') ?></td>
                <td>
                    <?php if (!empty($productinfo['active'])) { ?>

                        <a href="/product/edit/<?php echo $productinfo['id'] ?>" class="edit">Editar</a>
                        <a href="/product/delete/<?php echo $productinfo['id'] ?>" class="edit red">Desativar</a>

                    <?php } else { ?>

                        <a href="/product/delete/<?php echo $productinfo['id'] ?>" class="edit normal">Ativar</a>

                    <?php } ?>
                </td>
            </tr>
    <?php endforeach;
    } else {
        echo 'no data';
    }
    ?>
</table>