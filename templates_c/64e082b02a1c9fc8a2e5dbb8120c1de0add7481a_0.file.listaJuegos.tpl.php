<?php
/* Smarty version 4.2.1, created on 2022-10-06 18:47:31
  from 'D:\xampp\htdocs\Web 2 (XAMPP)\Codigo Practicos\codos\TrabajoObligatorio\3r_intento\templates\listaJuegos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633f06a3420076_28567144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64e082b02a1c9fc8a2e5dbb8120c1de0add7481a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Web 2 (XAMPP)\\Codigo Practicos\\codos\\TrabajoObligatorio\\3r_intento\\templates\\listaJuegos.tpl',
      1 => 1665074847,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633f06a3420076_28567144 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- lista de Juegos de Mesa con Tablero y Diracion -->
<table class="table">
    <thead>
        <tr class="list-group">
                <th class='list-group-item d-flex justify-content-between align-items-center'>
                    <span> <b>Id</b></span>
                    <span> <b>Juego</b></span>
                    <span> <b>Director</b></span>
                    <span> <b>cantidad de Jugadores</b></span>
                </th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['partida']->value, 'juego');
$_smarty_tpl->tpl_vars['juego']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['juego']->value) {
$_smarty_tpl->tpl_vars['juego']->do_else = false;
?>
            <tr class="list-group">
                <td class='list-group-item d-flex justify-content-between align-items-center'>
                    <span> <b><?php echo $_smarty_tpl->tpl_vars['juego']->value->id_juego;?>
</b> </span>
                    <span> <?php echo $_smarty_tpl->tpl_vars['juego']->value->juego;?>
 </span>
                    <span> <?php echo $_smarty_tpl->tpl_vars['juego']->value->tablero;?>
 </span>
                    <span> <?php echo $_smarty_tpl->tpl_vars['juego']->value->duracion;?>
 </span>
                    <span> <?php echo $_smarty_tpl->tpl_vars['juego']->value->precio;?>
 </span>
                </td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table><?php }
}
