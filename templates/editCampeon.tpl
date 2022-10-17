{include file="header.tpl"}


<form action="editCampeon/{$campeon->id_campeones}" method="POST" class="float-right">
        <div >
                <label>nombre:</label>
                <input name="nombre" type="text" id="nombre" class="form-control" value="{$campeon->nombre}">
                    
                <label>Tiempo en el que consagro la victoria:</label>
                <input name="duracion" type="number" id="duracion" class="form-control" value="{$campeon->duracion}">
                    
                <label>Fecha en la que se consagro campeon:</label>
                <input name="fecha" type="date" id="fecha" class="form-control" value="{$campeon->fecha}">
                    
            <label>Juego en la que se consagro campeon:</label>
                    
                <select name="id_juego" id="id_juego" >
                    {foreach from=$mesadejuego item=$mesa}
                        <option value="{$mesa->id_mesadejuego}">{$mesa->juego}</option>
                    {/foreach}
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Guardar</button>    
        </div>
                
    </form>

{include file="footer.tpl"}