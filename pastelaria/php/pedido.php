<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra do pedido</title>
    <link rel="stylesheet" href="./styles/pedido.css">
    <script src="../scripts/script.js" defer></script>
</head>
<body class="pedido-page">
    <h2>Formulário de Pedido</h2>
    <form method="POST" action="recebe.php">
    <section class="cliente">
        <h3>Dados do Cliente<h3>

        <fieldset styles="width: 50%;">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" size="40" maxlength="40" required placeholder="Digite seu nome Completo"><br>

            <label for="fone">Telefone:</label>
            <input type="tel" id="fone" name="fone" size="20" maxlength="20" required placeholder="Digite seu Telefone (ex: 119999999999)"><br>

            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" size="40" maxlength="40" placeholder="Digite seu Endereço"><br>

            <label for="bairro">Bairro:</label>
            <input type="text" id="bairro" name="bairro" size="20" maxlength="20" placeholder="Digite seu Bairro"><br>
        </fieldset>
    </section>

    <section class="pedido">
        <h2>Dados do Pedido</h2>
        <fieldset style="width: 50%;">
            <h3>Pizzas</h3>
            <select name="codpizza1">
                <option value="1">Calabresa - R$40,00</option>
                <option value="2">Portuguesa - R$42,00</option>
                <option value="3">Frango com Catupiry - R$39,00</option>
                <option value="4">Quatro Queijos - R$47,00</option>
            </select>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <h3>Quantidade</h3>
            <select name="qtd1">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <br><br>

            <select name="codpizza2">
                <option value="1"></option>
                <option value="2">Calabresa - R$40,00</option>
                <option value="3">Portuguesa - R$42,00</option>
                <option value="4">Frango com Catupiry - R$39,00</option>
                <option value="5">Quatro Queijos - R$47,00</option>
            </select>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <select name="qtd2">
                <option value="0"></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>

            <h3>Bebidas</h3>
            <select name="codbebida">
                <option value="1"></option>
                <option value="2">Coca-Cola - R$10,00</option>
                <option value="3">Sprite - R$7,00</option>
                <option value="4">Heineken - R$12,00</option>
            </select>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <h3>Quantidade<h3>
            <select name="bebiqtd">
                <option value="0"></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>


            <h3>Acompanhamentos</h3>
            <select name="codacomp">
                <option value="1"></option>
                <option value="2">Batata Frita - R$20,00</option>
                <option value="3">Batata Recheada - R$15,00</option>
                <option value="4">Batata Gratinada - R$25,00</option>
            </select>
        </fieldset>

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <h3>Quantidade<h3>
            <select name="acompqtd">
                <option value="0"></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
    </section>

    <section class="pagamento">
        <h2>Finalizar Pedido</h2>
        <fieldset style="width: 50%;">
            <h3>Forma do Pagamento</h3>
            <select name="codpagto">
                <option value="1">Cartão de Crédito</option>
                <option value="2">Cartão de Débito</option>
                <option value="3">PIX</option>
            </select>
            <br>

            <h3>Entrega</h3>
            <input type="radio" name="codentrega" value="1" checked>Retirar na Loja<br>
            <input type="raido" name="codentrega" value="2">Entregar no Endereço - Taxa de R$6,00<br>
            
            <h3>Ofertas e Promoção</h3>
            <input type="checkbox" name="receber1" value="1">Desejo receber mensagem sobre promoções<br>
            <input type="checkbox" name="receber2" value="1">Desejo receber mensagem sobre novos produtos<br>
        </fieldset>
    </section>

    <input type="submit" value="Confirmar Pedido" class="confirmar">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="reset" value="Cancelar Pedido" class="cancelar">
</body>
</html>