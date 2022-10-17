<?php
/* Smarty version 4.2.1, created on 2022-10-17 02:14:00
  from 'D:\xampp\htdocs\Web 2 (XAMPP)\Codigo Practicos\codos\TrabajoObligatorio\MesasDeJuegosDeMesas\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c9e48d86e38_31341784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2dc7680897402faa934e44f7165f5550d5ec3590' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Web 2 (XAMPP)\\Codigo Practicos\\codos\\TrabajoObligatorio\\MesasDeJuegosDeMesas\\templates\\login.tpl',
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
function content_634c9e48d86e38_31341784 (Smarty_Internal_Template $_smarty_tpl) {
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
