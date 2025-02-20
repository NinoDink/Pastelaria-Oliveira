<?php
$nome       =$_POST["nome"];
$fone       =$_POST["fone"];
$endereco   =$_POST["endereco"];
$bairro     =$_POST["bairro"];

$codpizza1  =$_POST["codpizza1"];
    if ($codpizza1 == 1) {
        $pizza1="Calabresa";
        $preco1=40;
    }
    elseif ($codpizza1 ==2) {
        $pizza1="Portuguesa";
        $preco1=42;
    }
    elseif ($codpizza1 ==3) {
        $pizza1="Frango com Catupiry";
        $preco1=39;
    }
    else {
        $pizza1="Quatro Queijos";
        $preco1=47;
    }

$qtd1       =$_POST["qtd1"];
$sub1       =$preco1 * qtd1;

$codpizza2  =$_POST["codpizza2"];
    if ($codpizza2 == 1) {
        $pizza2=" ";
        $preoc2=0;
    }
    elseif ($codpizza2 == 2) {
        $pizza2="Calabresa";
        $preco2=40;
    }
    elseif ($codpizza2 == 3) {
        $pizza2="Portuguesa";
        $preco2=42;
    }
    elseif ($codpizza2 == 4) {
        $pizza2="Frango com Catupiry";
        $preco2=39;
    }
    else {
        $pizza2="Quatro Queijos";
        $preco2=47;
    }

$qtd2       =$_POST["qtd2"];
    if ($qtd2 == 0) {
        $qtd2 = 1;
    }

$sub2 = $preco2 * $qtd2;

$codbebida  =$_POST["codbebida"];
    if ($codbebida == 1) {
        $bebida=" ";
        $preco3=0;
    }
    elseif ($codbebida == 2) {
        $bebida="Coca-Cola";
        $preco3=10;
    }
    elseif ($codbebida == 3) {
        $bebida="Sprite";
        $preco3=7;
    }
    else {
        $bebida="Heineken";
        $preco3=12;
    }

$bebiqtd    =$_POST["bebiqtd"];
    if ($bebiqtd == 0) {
        $bebiqtd=1;
    }

$sub3 = $preco3 * $bebiqtd;

$codacomp   =$_POST["$codacomp"];
    if ($codacomp == 1) {
        $acompa=" ";
        $preco4=0;
    }
    elseif ($codacomp == 2) {
        $acompa="Batata Frita";
        $preco4=20;
    }
    elseif ($codacomp == 3) {
        $acompa="Batata Recheada";
        $preco4=15;
    }
    else {
        $acompa="Batata Gratinada";
        $preco4=25;
    }

$acompqtd    =$_POST["bebiqtd"];
    if ($acompqtd == 0) {
        $acompqtd=1;
    }

$sub4 = $preco4 * $acompqtd;

$codentrega  =$_POST["codentrega"];
    if ($codentrega == 1) {
        $entrega="Cliente vem retira na loja";
        $taxaentrega=0;
    }
    else {
        $entrega="Entregar no endereço do cliente";
        $taxaentrega=6;
    }

$codpagto    =$_POST["codpagto"];
    if ($codpagto == 1) {
        $fpagto="Cartão de Crédito";
    }
    elseif("codpagto == 2") {
        $fpagto="Cartão de Débito";
    }
    else {
        $fpagto="PIX";
    }

if (isset($_POST["receber1"])) {
    $receber1=$_POST["receber1"];
}
else {
    $receber1=0
}

if (isset($_POST["receber2"])) {
    $receber2=$_POST["receber2"];
}
else {
    $receber2=0;
}
 
$vtotal = $sub1 + $sub2 + $sub3 + $sub4 + $taxaentrega;

echo "<h2><center>Pizzaria Santana</center></h2>";
echo "<h3>Dados do Cliente</h3>";
echo "Cliente: $nome<br>";
echo "Telefone: $fone<br>";
echo "Endereço: $endereco<br>";
echo "Bairro: $bairro<br>";

echo "<h3>Dados do Pedido</h3>";
echo "A pizza escolhida foi: $pizza1<br>";
echo "O valor da pizza: R$ " . number_format($preco1, 2, ',', '.') . <br>;
echo "A quantidade pedida foi: $qtd1 <br>";
echo "O valor da pizza: R$ " . number_format($sub1, 2, ',', '.') . <br>;

if ($codpizza2 <> 1) {
    echo "A pizza escolhida foi: $pizza1<br>";
    echo "O valor da pizza: R$ " . number_format($preco1, 2, ',', '.') . <br>;  
    echo "A quantidade pedida foi: $qtd1 <br>";
    echo "O valor da pizza: R$ " . number_format($sub1, 2, ',', '.') . <br>;
}

if ($codbebida <> 1){
	echo "<br>A bebida escolhida foi: $bebida<br>";
	echo "O valor da bebida: $preco3<br>";
	echo "A quantidade pedida: foi $qtdbebida<br>";
	echo "Subtotal: $sub3 <br><br>";
}

if ($coddoce <> 1){
	echo "A Sobremesa escolhida foi: $doce<br>";
	echo "O valor da bebida: $preco4<br>";
	echo "A quantidade pedida: foi $qtddoce<br>";
	echo "Subtotal: $sub4 <br><br>";
}

echo "<h3>Finalização do Pedido</h3>";
echo "Entrega: $entrega<br>";

if ($codentrega <> 1){
	echo "<br>O valor da entrega: $taxaentrega<br><br><br >";
}

if ($receber1 == 1 || $receber2 == 1){
	echo "<h3>Ofertas e Promoções:</h3>";
}

if ($receber1 == 1){
	echo "Desejo receber mensagens sobre promoções <br>";
}
if ($receber2 == 1){
	echo "Desejo receber mensagens sobre novos produtos <br>";
}

echo "<h3>Forma de Pagamento</h3>";
echo "Forma de Pagamento: $fpagto<br>";
echo "Valor a pagar: $vtotal<br><br><br>";	
?> 