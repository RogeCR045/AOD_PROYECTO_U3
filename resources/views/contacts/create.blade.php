<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
<div class="container">
    <h1>☎️ FORMULARIO DE CONTACTOS 📞</h1>
    <form action="{{ route('contacts.store') }}" method="post">

        @csrf

    <div>
        <label for="">Nombre completo:</label>
       <input class="form-control" type="text" name="fullname" id="" placeholder="Nombre completo">
    </div>

    <div>
      <label for="">Edad en años:</label>
       <input class="form-control" type="number" name="years" id="" placeholder="Edad en años">
    </div>

    <div>
       <label for="">Dirección de correo:</label>
       <input class="form-control" type="email" name="mailaddress" id="" placeholder="Dirección de correo">
    </div>

    <div>
        <label for="">Contraseña:</label>
        <input class="form-control" type="password" name="password" id="" placeholder="Contraseña">
    </div>

    <div>
        <label for="">Calle y codigo postal:</label>
        <input class="form-control" type="text" name="Street" id="" placeholder="Calle y codigo postal">
    </div>

    <div>
        <label for="">Localidad:</label>
        <input class="form-control" type="text" name="location" id="" placeholder="Localidad">
    </div>

    <div>
        <label for="">Ciudad:</label>
        <input class="form-control" type="text" name="city" id="" placeholder="Ciudad">
    </div>

    <div>
        <label for="">Estado:</label>
        <input class="form-control" type="text" name="condition" id="" placeholder="Estado">
    </div>

    <div>
        <label for="">Sitio web:</label>
        <textarea class="form-control" type="text" name="website" id=""  cols="20" rows="10"></textarea>
    </div>

    <input class="btn btn-primary" type="submit" value="Guardar">

    </form>
</div>