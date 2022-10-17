{include file="header.tpl"}


<form action="editMesa/{$mesadejuego->id_mesadejuego}" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">

                <label>Juego:</label>
                <input name="juego" type="text" id="juego" class="form-control" value="{$mesadejuego->juego}">

                <label>Jugador con rol unico o director de juego:</label>
                <input name="director" type="text" id="director" class="form-control" value="{$mesadejuego->director}">
                
                <label>Cantidad de jugadores:</label>
                <input name="cantidadJugadores" type="number" id="cantidadJugadores" class="form-control" value="{$mesadejuego->cantidadJugadores}">
                
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>

{include file="footer.tpl"}

