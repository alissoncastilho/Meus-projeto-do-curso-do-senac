<?php
$cepOrigem = $_POST["origem"];
$cepDestino = $_POST["destino"];
$peso = $_POST["peso"];
$servico = $_POST["servico"];

$xml = simplexml_load_file("http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?StrRetorno=xml&nCdEmpresa=&sDsSenha=&nCdServico=$servico&nVlPeso=$peso&sCepOrigem=$cepOrigem&sCepDestino=$cepDestino&nCdFormato=1&nVlComprimento=25&nVlAltura=25&nVlLargura=25&sCdMaoPropria=N&nVlValorDeclarado=0&sCdAvisoRecebimento=N");

foreach($xml->cServico as  $lista){
    $valor = $lista -> Valor;
    $prazo = $lista -> PrazoEntrega;

    echo "valor do frete:  <Strong> R$ $valor</Strong> <br>
    Prazo de entrega :  <Strong> R$ $prazo  dias</Strong>";

}

?>