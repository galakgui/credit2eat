<?php
/* Smarty version 3.1.33, created on 2018-09-24 19:17:57
  from 'C:\xampp\htdocs\credit2eat\view\cadastrar_curso.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ba91c459eacc2_46063225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95fce8917e05337a9937855ec96d7df68c09eb21' => 
    array (
      0 => 'C:\\xampp\\htdocs\\credit2eat\\view\\cadastrar_curso.tpl',
      1 => 1537808124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba91c459eacc2_46063225 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
</title>
    </head>
    <body>
    <center><h3>Cadastrar Novo Curso</h3></center>
    <hr>
    <br>
    <form name="form_curso" action="./cadastrar_curso" method="post">

        <div class="form-group" style="width:300px">
            <label><font size=4>Nome do Curso</font></label>
            <input type="text" class="form-control" name="curso_nome" id="curso_nome" required>
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-primary btn-block" name="botao">Cadastrar</button>
        </div>
        <div class="col-md-2">
            <button type="reset" onclick="limpa()" class="btn btn-danger btn-block" name="botao2">Cancelar</button>
        </div>
    </form>
</body>

<?php echo '<script'; ?>
>
    function limpa() {
        if (document.getElementById('curso_nome').value != "") {
            document.getElementById('curso_nome').value = "";
    }
<?php echo '</script'; ?>
>

</html><?php }
}
