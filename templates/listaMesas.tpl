{include file="header.tpl"}

{include file="formInscripcion.tpl"}

<div class="mx-auto" style="width: 800px;" >


<!-- lista de Mesas de Juegos de Mesa -->
<table class="table">
    <thead>
        <tr>
            <th> <span> <b> Juego</b></span> </th>
            <th> <span>     Editar </span> </th>
            <th> <span>     Borrar </span> </th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$mesadejuego item=$mesa}
            <tr>
                <td> 
                    <a href='navMesa/{$mesa->id_mesadejuego}' type='button' class='btn btn-success'>
                        {$mesa->juego}
                    </a>
                </td>
                <td> <a href='showEditMesa/{$mesa->id_mesadejuego}' type='button' class='btn btn-danger'>Editar</a> </td>
                <td> <a href='deleteMesa/{$mesa->id_mesadejuego}' type='button' class='btn btn-danger'>Borrar</a> </td>
            </tr>
        {/foreach}
    </tbody>
</table>

</div>

{include file="footer.tpl"}

