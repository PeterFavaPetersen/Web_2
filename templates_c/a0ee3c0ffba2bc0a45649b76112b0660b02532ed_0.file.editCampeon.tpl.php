<?php
/* Smarty version 4.2.1, created on 2022-10-16 04:47:55
  from 'D:\xampp\htdocs\Web 2 (XAMPP)\Codigo Practicos\codos\TrabajoObligatorio\3r_intento\templates\editCampeon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b70db214844_97484782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0ee3c0ffba2bc0a45649b76112b0660b02532ed' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Web 2 (XAMPP)\\Codigo Practicos\\codos\\TrabajoObligatorio\\3r_intento\\templates\\editCampeon.tpl',
      1 => 1665888473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634b70db214844_97484782 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<form action="editCampeon/<?php echo $_smarty_tpl->tpl_vars['campeon']->value->id_campeones;?>
" method="POST" class="float-right">
        <div >
                <label>nombre:</label>
                <input name="nombre" type="text" id="nombre" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['campeon']->value->nombre;?>
">
                    
                <label>Tiempo en el que consagro la victoria:</label>
                <input name="duracion" type="number" id="duracion" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['campeon']->value->duracion;?>
">
                    
                <label>Fecha en la que se consagro campeon:</label>
                <input name="fecha" type="date" id="fecha" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['campeon']->value->fecha;?>
">
                    
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

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
