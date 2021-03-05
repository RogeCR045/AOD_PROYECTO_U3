<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
@forelse ($professions as $profession)
<h3>MI CARRERA  PROFESIONAL :)</h3>
    <li>
       
        <h3>____________________________________________________________________________________________________________________</h3>
        <h5>{{ $profession->profession }}</h5>
        <h5>{{ $profession->name }}</h5>
        <p>{{ $profession->description }}</p>
        <br>
        <h3>____________________________________________________________________________________________________________________</h3>
    </li>
@empty
    <h1>La tabla no tiene datos</h1>
@endforelse

