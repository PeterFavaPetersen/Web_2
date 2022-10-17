<?php
/* Smarty version 4.2.1, created on 2022-10-17 02:13:58
  from 'D:\xampp\htdocs\Web 2 (XAMPP)\Codigo Practicos\codos\TrabajoObligatorio\MesasDeJuegosDeMesas\templates\listaCampeones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c9e4602f0b8_89172050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53bee53e945c5c657f8b12f0bbdee1c61003dcbe' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Web 2 (XAMPP)\\Codigo Practicos\\codos\\TrabajoObligatorio\\MesasDeJuegosDeMesas\\templates\\listaCampeones.tpl',
      1 => 1665894456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c9e4602f0b8_89172050 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- lista de Campeones -->

<div class="mx-auto" style="width: 1000px;" >
<table class="table">
    <thead>
        <tr>
            <th> <span> <b>Id</b></span> </th>
            <th> <span> <b>Capeon</b></span> </th>
            <th> <span> <b>Juego</b></span> </th>
            <th> <span> <b>Tiempo</b></span> </th>
            <th> <span> <b>Fecha</b></span> </th>
            <th> <span> Editar </span> </th>
            <th> <span> Borrar </span> </th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['campeones']->value, 'campeon');
$_smarty_tpl->tpl_vars['campeon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['campeon']->value) {
$_smarty_tpl->tpl_vars['campeon']->do_else = false;
?>
            <tr>
                <td> <span> <b><?php echo $_smarty_tpl->tpl_vars['campeon']->value->id_campeones;?>
</b> </span> </td>
                <td> <span> <?php echo $_smarty_tpl->tpl_vars['campeon']->value->nombre;?>
 </span> </td>
                <td> <span> 
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mesadejuego']->value, 'mesa');
$_smarty_tpl->tpl_vars['mesa']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mesa']->value) {
$_smarty_tpl->tpl_vars['mesa']->do_else = false;
?>
                    <?php if ((($_smarty_tpl->tpl_vars['mesa']->value->id_mesadejuego) == ($_smarty_tpl->tpl_vars['campeon']->value->id_juego))) {?>
                        <?php echo ($_smarty_tpl->tpl_vars['mesa']->value->juego);?>

                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </span> </td>
                <td> <span> <?php echo $_smarty_tpl->tpl_vars['campeon']->value->duracion;?>
 </span> </td>
                <td> <span> <?php echo $_smarty_tpl->tpl_vars['campeon']->value->fecha;?>
 </span> </td>
                <td> <a href='showEditCampeon/<?php echo $_smarty_tpl->tpl_vars['campeon']->value->id_campeones;?>
' type='button' class='btn btn-danger'>Editar</a> </td>
                <td> <a href='deleteCampeon/<?php echo $_smarty_tpl->tpl_vars['campeon']->value->id_campeones;?>
' type='button' class='btn btn-danger'>Borrar</a> </td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

</div>


<?php }
}
