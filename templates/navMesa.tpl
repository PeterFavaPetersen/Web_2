{include file="header.tpl"}

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
                    <td> <span> {$mesadejuego->id_mesadejuego} </span> </td>
                    <td> <span> {$mesadejuego->juego} </span> </td>
                    <td> <span> {$mesadejuego->director} </span> </td>
                    <td> <span> {$mesadejuego->cantidadJugadores} </span> </td>
                    <td> <a href='showEditMesa/{$mesadejuego->id_mesadejuego}' type='button' class='btn btn-danger'>Editar</a> </td>
                    <td> <a href='deleteMesa/{$mesadejuego->id_mesadejuego}' type='button' class='btn btn-danger'>Borrar</a> </td>
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
            {foreach from=$campeonesById item=$campeon}
                <tr>
                    <td> <span> <b>{$campeon->id_campeones}</b> </span> </td>
                    <td> <span> {$campeon->nombre} </span> </td>
                    <td> <span> 
                        {if (($mesadejuego->id_mesadejuego)==($campeon->id_juego))}
                            {($mesadejuego->juego)}
                        {/if} 
                    </span> </td>
                    <td> <span> {$campeon->duracion} </span> </td>
                    <td> <span> {$campeon->fecha} </span> </td>
                    <td> <a href='showEditCampeon/{$campeon->id_campeones}' type='button' class='btn btn-danger'>Editar</a> </td>
                    <td> <a href='deleteCampeon/{$campeon->id_campeones}' type='button' class='btn btn-danger'>Borrar</a> </td>
                </tr>
            {/foreach}
        </tbody>
    </table>

</div>

{include file="footer.tpl"}