<?php
/* Smarty version 4.2.1, created on 2022-10-10 23:36:03
  from 'D:\xampp\htdocs\Web 2 (XAMPP)\Codigo Practicos\codos\TrabajoObligatorio\3r_intento\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6344904342af83_59906381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55c7f9cb883d6c48a3b9335eff56c209b7774a8f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Web 2 (XAMPP)\\Codigo Practicos\\codos\\TrabajoObligatorio\\3r_intento\\templates\\login.tpl',
      1 => 1665437760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6344904342af83_59906381 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h1>Login</h1>
 <?php if (!(isset($_smarty_tpl->tpl_vars['_SESSION']->value["name_usuario"]))) {?>

                    <form action="loggearse" method="POST">

                        <input name="name_usuario" type="text" id="name_usuario" placeholder="Username" required class="form-control"> 
                        
                        <input name="password_usuario" type="password" id="password_usuario" placeholder="Password" required class="form-control">
                                
                        <button type="submit" class="btn btn-primary mt-2">Guardar</button>
                    </form>
                <?php }?>
                
                <?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value["name_usuario"]))) {?>
                    <li class="nav-item ml-auto">
                      <a class="nav-link" aria-current="page" href="logout">Logout</a>
                    </li>
                <?php }?>       



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
