<?php
/* Smarty version 4.2.1, created on 2022-10-16 04:51:29
  from 'D:\xampp\htdocs\Web 2 (XAMPP)\Codigo Practicos\codos\TrabajoObligatorio\3r_intento\templates\editMesa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b71b144e0b6_03634049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5624176da47104b04c5f231190c6df54941ad530' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Web 2 (XAMPP)\\Codigo Practicos\\codos\\TrabajoObligatorio\\3r_intento\\templates\\editMesa.tpl',
      1 => 1665888559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634b71b144e0b6_03634049 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<form action="editMesa/<?php echo $_smarty_tpl->tpl_vars['mesadejuego']->value->id_mesadejuego;?>
" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">

                <label>Juego:</label>
                <input name="juego" type="text" id="juego" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['mesadejuego']->value->juego;?>
">

                <label>Jugador con rol unico o director de juego:</label>
                <input name="director" type="text" id="director" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['mesadejuego']->value->director;?>
">
                
                <label>Cantidad de jugadores:</label>
                <input name="cantidadJugadores" type="number" id="cantidadJugadores" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['mesadejuego']->value->cantidadJugadores;?>
">
                
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
