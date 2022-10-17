<?php
/* Smarty version 4.2.1, created on 2022-10-16 06:28:48
  from 'D:\xampp\htdocs\Web 2 (XAMPP)\Codigo Practicos\codos\TrabajoObligatorio\3r_intento\templates\navMesa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b8880d06f00_82190971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdbf1603deeac9f33b202babf161a2cbce954d3b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Web 2 (XAMPP)\\Codigo Practicos\\codos\\TrabajoObligatorio\\3r_intento\\templates\\navMesa.tpl',
      1 => 1665894527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634b8880d06f00_82190971 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="mx-auto" style="width: 1000px;" >

    <table class="table">
        <thead>
            <tr>
                <th>    <span> <b>Id</b></span> </th>
                <th>    <span> <b>Juego</b></span> </th>
                <th>    <span> <b>Director</b></span> </th>
                <th>    <span> <b>cantidad de Jugadores</b></span> </th>
                <th>    <span> Editar </span> </th>
                <th>    <span> Borrar </span> </th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td> <span> <?php echo $_smarty_tpl->tpl_vars['mesadejuego']->value->id_mesadejuego;?>
 </span> </td>
                    <td> <span> <?php echo $_smarty_tpl->tpl_vars['mesadejuego']->value->juego;?>
 </span> </td>
                    <td> <span> <?php echo $_smarty_tpl->tpl_vars['mesadejuego']->value->director;?>
 </span> </td>
                    <td> <span> <?php echo $_smarty_tpl->tpl_vars['mesadejuego']->value->cantidadJugadores;?>
 </span> </td>
                    <td> <a href='showEditMesa/<?php echo $_smarty_tpl->tpl_vars['mesadejuego']->value->id_mesadejuego;?>
' type='button' class='btn btn-danger'>Editar</a> </td>
                    <td> <a href='deleteMesa/<?php echo $_smarty_tpl->tpl_vars['mesadejuego']->value->id_mesadejuego;?>
' type='button' class='btn btn-danger'>Borrar</a> </td>
                </tr>
        </tbody>
    </table>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['campeonesById']->value, 'campeon');
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
                        <?php if ((($_smarty_tpl->tpl_vars['mesadejuego']->value->id_mesadejuego) == ($_smarty_tpl->tpl_vars['campeon']->value->id_juego))) {?>
                            <?php echo ($_smarty_tpl->tpl_vars['mesadejuego']->value->juego);?>

                        <?php }?> 
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

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
