<?php
$smarty = new Template();

$produtos = new Produtos();
$produtos->GetProdutos();

$smarty->assign('PRO', $produtos->GetItens());

$produtos = new Clientes();
$produtos->GetClientes();

$smarty->assign('CLI', $produtos->GetItens());

if (isset($_POST['produto']) && isset($_POST['cliente'])) {
    $realizarVenda = new Vendas();

    foreach ($_POST['produto'] as $p) {
        $quantidade = $realizarVenda->descontarQuantidade($p);
    }

    $resp = $realizarVenda->setVendas($_POST['cliente'], $_POST['produto'], $_POST['senha'], $_POST['valor']);

    header("location:./vendas");
}
if (isset($_POST['produto']) && empty($_POST['cliente'])) {
    $realizarVendaVista = new Vendas();
    $resp = $realizarVendaVista->setVendaVista($_POST['produto']);
    foreach ($_POST['produto'] as $p) {
        $quantidade = $realizarVendaVista->descontarQuantidade($p);
    }
}


$smarty->display('realizar_vendas.tpl');
?>

<!-- $_POST['a_prazo'],  -->

<!--$resp = $realizarVenda->setVendas($_POST['cliente'], $_POST['valor_venda'], $_POST['a_prazo'], $_POST['data_venda'], $_POST['produto_id']); -->