<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
<div class="container">
    <h1>FORMULARIO DE PROFESIONES :)</h1>
    <form action="{{ route('professions.store') }}" method="post">

        @csrf

    <div>
        <label for="">Nombre completo:</label>
        <input class="form-control" type="text" name="name" id="" placeholder="Nombre completo">
    </div>

    <div>
        <label for="">Edad en años:</label>
        <input class="form-control" type="number" name="ageyears" id="" placeholder="Edad en años">
    </div>

    <div>
        <label for="">Profesión:</label>
        <input class="form-control" type="text" name="profession" id="" placeholder="Profesión">
    </div>

    <div>
        <label for="">Número telefónico:</label>
        <input class="form-control" type="number" name="phonenumber" id="" placeholder="Número telefónico">
    </div>

    <div>
        <label for="">Años trabajando en ello:</label>
        <input class="form-control" type="number" name="yearsworking" id="" placeholder="Años trabajando en ello">
    </div>

    <div>
        <label for="">De quién lo heredo o por que le gusto:</label>
        <input class="form-control" type="text" name="inherited" id="" placeholder="De quién lo heredo o por que le gusto">
    </div>

    <div>
        <label for="">Descripción de la carrera:</label>
        <textarea class="form-control" type="text" name="description" id="" cols="30" rows="15"></textarea>
    </div>

    <div>
        <label for="">Comentario:</label>
        <input class="form-control" type="text" name="commentcarr" id="" placeholder="Comentario">
    </div>

    <input class="btn btn-primary" type="submit" value="Guardar">

    </form>
</div>