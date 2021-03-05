<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
<div class="container">
    <h1>🙊 FORMULARIO DE ANIMALES 🐒</h1>
    <form action="{{ route('animals.store') }}" method="post">

        @csrf

    <div>
        <label for="">Animal:</label>
       <input class="form-control" type="text" name="animal" id="" placeholder="Animal">
    </div>

    <div>
      <label for="">Edad en años:</label>
       <input class="form-control" type="number" name="age" id="" placeholder="Edad en años">
    </div>

    <div>
       <label for="">Lugar de origen:</label>
       <input class="form-control" type="text" name="birthplace" id="" placeholder="Lugar de origen">
    </div>

    <div>
        <label for="">Clima:</label>
        <input class="form-control" type="text" name="climate" id="" placeholder="Clima">
    </div>

    <div>
        <label for="">Color:</label>
        <input class="form-control" type="text" name="color" id="" placeholder="Color">
    </div>

    <div>
        <label for="">Pejale:</label>
        <input class="form-control" type="text" name="fur" id="" placeholder="Pejale">
    </div>

    <div>
        <label for="">Comida:</label>
        <input class="form-control" type="text" name="food" id="" placeholder="Comida">
    </div>

    <div>
        <label for="">Comentario:</label>
        <textarea class="form-control" type="text" name="comemmtanim" id=""  cols="30" rows="15"></textarea>
    </div>

    <input class="btn btn-primary" type="submit" value="Guardar">

    </form>
</div>