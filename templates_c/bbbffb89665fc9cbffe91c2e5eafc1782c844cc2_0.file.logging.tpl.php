<?php
/* Smarty version 4.2.1, created on 2022-10-09 22:26:48
  from 'D:\xampp\htdocs\Web 2 (XAMPP)\Codigo Practicos\codos\TrabajoObligatorio\3r_intento\templates\logging.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63432e88ec9404_53003674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbbffb89665fc9cbffe91c2e5eafc1782c844cc2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Web 2 (XAMPP)\\Codigo Practicos\\codos\\TrabajoObligatorio\\3r_intento\\templates\\logging.tpl',
      1 => 1665347207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63432e88ec9404_53003674 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



    <form action="loggearse" method="POST">

        <label>name_usuario:</label>
        <input name="name_usuario" type="text" id="name_usuario" placeholder="Username" required> 
        
        <label>password_usuario:</label>
        <input name="password_usuario" type="password" id="password_usuario" placeholder="Password" required>
                
        <button type="submit" class="btn btn-primary mt-2">Guardar</button>
    </form>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
