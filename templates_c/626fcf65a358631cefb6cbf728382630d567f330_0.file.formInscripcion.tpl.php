<?php
/* Smarty version 4.2.1, created on 2022-10-15 21:34:37
  from 'D:\xampp\htdocs\Web 2 (XAMPP)\Codigo Practicos\codos\TrabajoObligatorio\3r_intento\templates\formInscripcion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b0b4d041b45_12592948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '626fcf65a358631cefb6cbf728382630d567f330' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Web 2 (XAMPP)\\Codigo Practicos\\codos\\TrabajoObligatorio\\3r_intento\\templates\\formInscripcion.tpl',
      1 => 1665862474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634b0b4d041b45_12592948 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="d-flex justify-content-center">
    <form action="addJuego" method="POST" class="float-left">
        <div >
            <label>Juego:</label>
            <input name="juego" type="text" id="juego" class="form-control">
            <label>Jugador con rol unico o director de juego:</label>
            <input name="director" type="text" id="director" class="form-control">
            <label>Cantidad de jugadores:</label>
            <input name="cantidadJugadores" type="number" id="cantidadJugadores" class="form-control">
            <label></label>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Guardar</button>
    </form>

    <form action="addCampeon" method="POST" class="float-right">
        <div >
                <label>nombre:</label>
                <input name="nombre" type="text" id="nombre" class="form-control">
                    
                <label>Tiempo en el que consagro la victoria:</label>
                <input name="duracion" type="number" id="duracion" class="form-control">
                    
                <label>Fecha en la que se consagro campeon:</label>
                <input name="fecha" type="date" id="fecha" class="form-control">
                    
            <label>Juego en la que se consagro campeon:</label>
                    
                <select name="id_juego" id="id_juego" >
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mesadejuego']->value, 'mesa');
$_smarty_tpl->tpl_vars['mesa']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mesa']->value) {
$_smarty_tpl->tpl_vars['mesa']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['mesa']->value->id_mesadejuego;?>
"><?php echo $_smarty_tpl->tpl_vars['mesa']->value->juego;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Guardar</button>    
        </div>
                
    </form>
</div><?php }
}
