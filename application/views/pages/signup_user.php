<main>
    <h1>Cadastrar usuário</h1>
    <?php $actionPath = !empty($user) ? '/user/update/'.$user['id'] : '/user/store' ?>
    <form action="<?php echo $actionPath ?>" method="post">
        <input type="text" id="name" name="name" placeholder="Nome"
        value="<?php echo $user['name'] ?? '' ?>" required>
        <input type="text" id="username" name="username" placeholder="Usuário"
        value = "<?php echo $user['username'] ?? '' ?>"  required >
        <input type="email" id="email" name="email" placeholder="E-mail"
        value = "<?php echo $user['email'] ?? '' ?>"  required >
        <input type="password" id="password" name="password" placeholder="Senha"
        value = "<?php echo $user['password'] ?? '' ?>"  required>
        <input type="date" id="BirthDate" name="BirthDate" value="<?php echo $user['BirthDate'] ?? '' ?>"  required >
        <button type="submit">Salvar</button>
    </form>
</main>