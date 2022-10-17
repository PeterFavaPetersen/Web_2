<?php
/* Smarty version 4.2.1, created on 2022-10-11 01:43:21
  from 'D:\xampp\htdocs\Web 2 (XAMPP)\Codigo Practicos\codos\TrabajoObligatorio\3r_intento\templates\listaPartidas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6344ae19b7cd90_60920483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abca969a2467870f8f68e0a6cd2546c356aea530' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Web 2 (XAMPP)\\Codigo Practicos\\codos\\TrabajoObligatorio\\3r_intento\\templates\\listaPartidas.tpl',
      1 => 1665445194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6344ae19b7cd90_60920483 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- lista de Campeones -->
<table class="table">
    <thead>
        <tr class="list-group">
                <th class='list-group-item d-flex justify-content-between align-items-center'>
                    <span> <b>Id</b></span>
                    <span> <b>Capeon</b></span>
                    <span> <b>Juego</b></span>
                    <span> <b>Tiempo</b></span>
                    <span> <b>Fecha</b></span>
                </th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['campeones']->value, 'campeon');
$_smarty_tpl->tpl_vars['campeon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['campeon']->value) {
$_smarty_tpl->tpl_vars['campeon']->do_else = false;
?>
            <tr class="list-group">
                <td class='list-group-item d-flex justify-content-between align-items-center'>
                    <span> <b><?php echo $_smarty_tpl->tpl_vars['campeon']->value->id_campeones;?>
</b> </span>
                    <span> <?php echo $_smarty_tpl->tpl_vars['campeon']->value->nombre;?>
 </span>
                    <span> <?php echo $_smarty_tpl->tpl_vars['campeon']->value->id_juego;?>
 </span>
                    <span> <?php echo $_smarty_tpl->tpl_vars['campeon']->value->duracion;?>
 </span>
                    <span> <?php echo $_smarty_tpl->tpl_vars['campeon']->value->fecha;?>
 </span>
                </td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

<?php }
}
