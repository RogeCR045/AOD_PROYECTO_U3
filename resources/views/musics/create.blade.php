<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
<div class="container">
    <h1>FORMULARIO DE CANCIONES :)</h1>
    <form action="{{ route('musics.store') }}" method="post">

        @csrf

    <div>
        <label for="">Nombre de la canción:</label>
        <input class="form-control" type="text" name="songname" id="" placeholder="Nombre de la canción">
    </div>

    <div>
        <label for="">Artista:</label>
        <input class="form-control" type="text" name="artist" id="" placeholder="Artista">
    </div>

    <div>
        <label for="">Género:</label>
        <input class="form-control" type="text" name="gender" id="" placeholder="Género">
    </div>

    <div>
        <label for="">Año de lanzamiento:</label>
        <input class="form-control" type="number" name="yearlaunch" id="" placeholder="Año de lanzamiento">
    </div>

    <div>
        <label for="">Album:</label>
        <input class="form-control" type="text" name="album" id="" placeholder="Album">
    </div>

    <div>
        <label for="">Redes sociales:</label>
        <input class="form-control" type="text" name="socialmedia" id="" placeholder="Redes sociales">
    </div>

    <div>
        <label for="">Tiempo de año escuchandolo:</label>
        <input class="form-control" type="number" name="timelistening" id="" placeholder="Tiempo de año escuchandolo">
    </div>

    <div>
        <label for="">Letra de la cancion:</label>
        <textarea class="form-control" type="text" name="letter" id="" cols="30" rows="10"></textarea>
    </div>

    <div>
        <label for="">Comentario:</label>
        <input class="form-control" type="text" name="comment" id="" placeholder="Comentario">
    </div>

    <input class="btn btn-primary" type="submit" value="Guardar">

    </form>
</div>
