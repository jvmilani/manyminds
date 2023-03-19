<main>
    <h1>Cadastrar produto</h1>
    <?php $actionPath = !empty($product) ? '/product/update/' . $product['id'] : '/product/store' ?>
    <form id="form" action="<?php echo $actionPath ?>" method="post">
        <input type="text" id="title" name="title" placeholder="Titulo"
        value="<?php echo $product['title'] ?? '' ?>" required>
        <input type="number" id="quantity" name="quantity" placeholder="Quantidade"
        value="<?php echo $product['quantity'] ?? '' ?>" required>

        <input type="text" id="priceShow" name="priceShow" placeholder="Preço"
        value = "<?php echo number_format($product['price'], '2', ',', '') ?? '' ?>"
        onchange="regexPrice(this.value)" onkeyup="regexPrice(this.value)" required>
        <input type="hidden" name="price" id="price">

        <button type="submit" id="send">Salvar</button>
    </form>
</main>

<script>
    $('#send').click(function (e) {
        e.preventDefault();
        $('#price').val($('#priceShow').val());
        let price = $('#price').val().replace('.','');
        price = price.replace(',','.');
        $('#price').val(price);
        $('#priceShow').remove();
        $('#form').submit()
    });
    function regexPrice(price) {
        price = price.replace(/\D/g,'')
        price = price.replace(/(\d{1})(\d{1,2})$/, "$1,$2")
        price = price.replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1')
        $('#priceShow').val(price);
        $('#price').val(price.replace('.','').replace(',', '.'));
        return price
    }
</script>

