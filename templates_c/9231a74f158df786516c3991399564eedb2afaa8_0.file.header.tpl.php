<?php
/* Smarty version 4.2.1, created on 2022-10-16 23:35:31
  from 'D:\xampp\htdocs\Web 2 (XAMPP)\Codigo Practicos\codos\TrabajoObligatorio\3r_intento\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c79233667f0_60204918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9231a74f158df786516c3991399564eedb2afaa8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Web 2 (XAMPP)\\Codigo Practicos\\codos\\TrabajoObligatorio\\3r_intento\\templates\\header.tpl',
      1 => 1665956129,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c79233667f0_60204918 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Mesas de Juegos</title>
</head>

<body>
    <header clasclass="d-flex">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="mr-auto p-2">

                <a class="navbar-brand" href="">Mesas de Juegos de Mesa</a>
            </div>
            <?php if (($_smarty_tpl->tpl_vars['usernameExists']->value == true)) {?>
                <div class="p-2">
                    <a class="navbar-brand" href="showLogin">Ingresar</a>
                </div>
                <div class="p-2">
                    <a class="navbar-brand" href="showRegister">Registrarse</a>
                </div>
            <?php } else { ?>  
                <div class="p-2">
                    <a class="navbar-brand" href="logout">Logout</a>
                </div>
            <?php }?>
        </nav>
    </header><?php }
}
