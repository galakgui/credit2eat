<?php
/* Smarty version 3.1.33, created on 2018-09-24 23:17:55
  from 'C:\xampp\htdocs\credit2eat\view\estoque.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ba9548398f144_62704620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e872ec87957ae26bf9448b14d7612f2bfce3c8d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\credit2eat\\view\\estoque.tpl',
      1 => 1537822888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba9548398f144_62704620 (Smarty_Internal_Template $_smarty_tpl) {
?>

<center>
    <h3>Atualizar Estoque</h3> 
</center>
<hr>
<br>
<form id="atualiza" name="atualiza" action="./atualiza" method="post">
    <div>
    <div class="col-md-3" class="col-xs-6" style="width: 400px">
        <div class="form-group">
            <label><font size=4>Escolha um Produto</font></label>
            <select id="produto-select" name="produto" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_id'];?>
" required>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_nome'];?>
 - <?php echo $_smarty_tpl->tpl_vars['P']->value['prod_valor'];?>
 </option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
    </div>
    <div class="col-md-3" class="col-xs-6">
        <div class="form-group" style="width:400px">
            <label><font size=4>Insira a quantidade:</font></label>
            <input type="number" class="form-control" id="qtd" name="qtd" required>
    </div>
    </div>
    <div class="col-md-12" class="col-xs-6">
        <div class="col-md-3">
            <button type="submit" class="btn btn-primary btn-block" name="botao">ATUALIZAR ESTOQUE</button>
        </div>
    </div>
</form>
<hr>





<?php echo '<script'; ?>
>
    function limpa() {
        if (document.getElementById('cliente').value != "") {
            document.getElementById('cliente').value = "";
            header('location:./realizar_vendas');
        }
    }
<?php echo '</script'; ?>
>


<!--<div class="col-md-12" class="col-xs-6">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="a_prazo" id="a_prazo">
            <label class="form-check-label" id="a_prazo" value="a_prazo" name="a_prazo" for="a_prazo"><font size=4>A Prazo</font></label>
        </div> 
</div> --><?php }
}
