<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
@forelse ($animals as $animal)
<h3>MIS ANIMALES</h3>
    <li>
       
        <h3><h1> 😺 · 😸 ·  🙈 ·  🙊 · 🐵 · 🐒 · 🦍 · 🐶 · 🐕 · 🐩.</h1></h3>
        <h5>{{ $animal->animal }}</h5>
        <h5>{{ $animal->birthplace }}</h5>
        <p>{{ $animal->comemmtanim }}</p>
        <br>
        <h3>____________________________________________________________________________________________________________________</h3>
    </li>
@empty
    <h1>La tabla no tiene datos</h1>
@endforelse
