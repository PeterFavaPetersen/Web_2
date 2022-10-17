{include file="header.tpl"}


<h1>Login</h1>
 {if !isset($_SESSION["name_usuario"])}

                    <form action="loggearse" method="POST">

                        <input name="name_usuario" type="text" id="name_usuario" placeholder="Username" required class="form-control"> 
                        
                        <input name="password_usuario" type="password" id="password_usuario" placeholder="Password" required class="form-control">
                                
                        <button type="submit" class="btn btn-primary mt-2">Guardar</button>
                    </form>
                {/if}
                
                {if isset($_SESSION["name_usuario"])}
                    <li class="nav-item ml-auto">
                      <a class="nav-link" aria-current="page" href="logout">Logout</a>
                    </li>
                {/if}       



{include file="footer.tpl"}

