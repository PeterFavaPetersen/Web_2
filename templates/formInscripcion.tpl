<div class="d-flex justify-content-center">
    <form action="addJuego" method="POST" class="float-left">
        <div >
            <label>Juego:</label>
            <input name="juego" type="text" id="juego" class="form-control">
            <label>Jugador con rol unico o director de juego:</label>
            <input name="director" type="text" id="director" class="form-control">
            <label>Cantidad de jugadores:</label>
            <input name="cantidadJugadores" type="number" id="cantidadJugadores" class="form-control">
            <label></label>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Guardar</button>
    </form>

    <form action="addCampeon" method="POST" class="float-right">
        <div >
                <label>nombre:</label>
                <input name="nombre" type="text" id="nombre" class="form-control">
                    
                <label>Tiempo en el que consagro la victoria:</label>
                <input name="duracion" type="number" id="duracion" class="form-control">
                    
                <label>Fecha en la que se consagro campeon:</label>
                <input name="fecha" type="date" id="fecha" class="form-control">
                    
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
</div>