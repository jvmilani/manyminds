<h1>Produtos</h1>
<table>
    <?php if (is_array($product) && count($product) > 0) { ?>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Login</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <?php 
        foreach ($product as $productinfo) : ?>
        <tr>
            <td><?php echo  $productinfo['title'] ?></td>
            <td><?php echo  $productinfo['quantity'] ?></td>
            <td><?php echo  $productinfo['price'] ?></td>
        </tr>
    <?php endforeach;
    } else {
        echo 'no data';
    }
    ?>
</table>