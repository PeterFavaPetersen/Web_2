<?php
/* Smarty version 4.2.1, created on 2022-10-16 06:38:15
  from 'D:\xampp\htdocs\Web 2 (XAMPP)\Codigo Practicos\codos\TrabajoObligatorio\3r_intento\templates\listaMesas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b8ab737a4e2_55174819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a192e55d4a0e63aa3fcbb63d1a01aea24fd6244a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Web 2 (XAMPP)\\Codigo Practicos\\codos\\TrabajoObligatorio\\3r_intento\\templates\\listaMesas.tpl',
      1 => 1665895087,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:formInscripcion.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634b8ab737a4e2_55174819 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:formInscripcion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="mx-auto" style="width: 800px;" >


<!-- lista de Mesas de Juegos de Mesa -->
<table class="table">
    <thead>
        <tr>
            <th> <span> <b> Juego</b></span> </th>
            <th> <span>     Editar </span> </th>
            <th> <span>     Borrar </span> </th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mesadejuego']->value, 'mesa');
$_smarty_tpl->tpl_vars['mesa']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mesa']->value) {
$_smarty_tpl->tpl_vars['mesa']->do_else = false;
?>
            <tr>
                <td> 
                    <a href='navMesa/<?php echo $_smarty_tpl->tpl_vars['mesa']->value->id_mesadejuego;?>
' type='button' class='btn btn-success'>
                        <?php echo $_smarty_tpl->tpl_vars['mesa']->value->juego;?>

                    </a>
                </td>
                <td> <a href='showEditMesa/<?php echo $_smarty_tpl->tpl_vars['mesa']->value->id_mesadejuego;?>
' type='button' class='btn btn-danger'>Editar</a> </td>
                <td> <a href='deleteMesa/<?php echo $_smarty_tpl->tpl_vars['mesa']->value->id_mesadejuego;?>
' type='button' class='btn btn-danger'>Borrar</a> </td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
