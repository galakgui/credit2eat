<?php
/* Smarty version 3.1.33, created on 2018-09-25 20:17:22
  from 'C:\xampp\htdocs\credit2eat\view\clientes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5baa7bb23a55e7_91749477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b1a6de485eefe4b1ee61b36e4a3407094c6f428' => 
    array (
      0 => 'C:\\xampp\\htdocs\\credit2eat\\view\\clientes.tpl',
      1 => 1537899438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5baa7bb23a55e7_91749477 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
    <center>
        <h3>Lista de Clientes</h3> 
    </center>
    <hr>

    <!--<section>
            <center>
                            
            </center>	
    </section> --> 

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Matricula</th>
                <th scope="col">Email</th>
                <th scope="col">Pendências</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>


        <!-- começa a lista de clientes -->
        <section id="produtos" class="row">

            <ul style="list-style: none">

                <div class="row" id="pularlinha">

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CLI']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>

                        <!-- <li class="col-md-4">
                         
                         <div class="thumbnail"> 
     
                                 <a href="<?php echo $_smarty_tpl->tpl_vars['CLI_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['C']->value['c_nome'];?>
"> -->

                        <tbody>
                            <tr>			
                                <th scope="row"><a href="" style="color: #030300"><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_nome'];?>
</a></th>
                                <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_matricula'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_email'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_divida'];?>
</td>
                                <td><a href="javascript:void(0);" class="excluir" id-pessoa="<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_id'];?>
" style="color: #030300" style=""><i class="pe-7s-trash"></i></a></td>
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



</html>



<?php echo '<script'; ?>
 type="text/javascript">
    $('.excluir').click(function(){
        var idPessoa = $(this).attr('id-pessoa');

        $("#ModalDelete").modal();

        $('.excluirCliente').click(function(){
            var urlConsulta = './excluir/'+idPessoa;
            console.log(idPessoa);
            $.get(urlConsulta, function (res){
                console.log(res);
                if(res === '1'){
                    bootbox.alert("Cliente excluído com sucesso", function(){

                        window.location.reload();

                    });
                }else{
                    bootbox.alert("Senha incorreta", function(){


                        window.location.reload();
                    });
                }

            });
        });

    });
<?php echo '</script'; ?>
>
<!-- paginação inferior -->
<!--<section id="paginacao" class="row">
        <center>
                PAGINAS
        </center>
</section> --><?php }
}
