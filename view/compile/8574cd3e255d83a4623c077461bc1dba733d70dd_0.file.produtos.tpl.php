<?php
/* Smarty version 3.1.32, created on 2018-08-27 22:30:38
  from 'C:\xampp\htdocs\credit2eat\view\produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b845f6e660213_62241029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8574cd3e255d83a4623c077461bc1dba733d70dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\credit2eat\\view\\produtos.tpl',
      1 => 1535379478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b845f6e660213_62241029 (Smarty_Internal_Template $_smarty_tpl) {
?><center>
	<h3>Lista de Produtos</h3>
</center>
<hr>

<!--	<section>
		<center>
			PAGINAS
		</center>	
	</section> -->

		<table class="table">
			<thead>
				<tr>
					<th scope="col">Nome</th>
					<th scope="col">Valor</th>
					<th scope="col">Quantidade</th>
					<th scope="col">Mínimo</th>
					<th scope="col">Vendidos</th>
				</tr>
			</thead>
			

	<!-- começa a lista de produtos -->
	<section id="produtos" class="row">

		<ul style="list-style: none">
			
			<div class="row" id="pularlinha">

				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>

				<!--<li class="col-md-4">
				
				<div class="thumbnail"> -->

					<!--<a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_id'];?>
"> -->

				<tbody>
					<tr>			
							<th scope="row"><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_nome'];?>
</th>
							<td>R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['prod_valor'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_qnt'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_qnt_min'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_qnt_ven'];?>
</td>					
					</tr>
				</tbody>
					

				<!--</a>

				</div> 

				</li> -->

				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					
				

			</div>

		</ul>

	</section>

	</table>

	<?php }
}
