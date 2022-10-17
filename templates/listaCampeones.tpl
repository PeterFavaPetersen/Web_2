<!-- lista de Campeones -->

<div class="mx-auto" style="width: 1000px;" >
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
        {foreach from=$campeones item=$campeon}
            <tr>
                <td> <span> <b>{$campeon->id_campeones}</b> </span> </td>
                <td> <span> {$campeon->nombre} </span> </td>
                <td> <span> 
                {foreach from=$mesadejuego item=$mesa}
                    {if (($mesa->id_mesadejuego)==($campeon->id_juego))}
                        {($mesa->juego)}
                    {/if}
                {/foreach}
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


