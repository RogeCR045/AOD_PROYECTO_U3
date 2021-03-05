<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
@forelse ($musicas as $music)
<h3>MIS CANCIONES FAVORITAS :)</h3>
    <li>
       
        <h3>____________________________________________________________________________________________________________________</h3>
        <h5>{{ $music->songname }}</h5>
        <h5>{{  $music->artist }}</h5>
        <p>{{ $music->letter }}</p>
        <br>
        <h3>____________________________________________________________________________________________________________________</h3>
    </li>
@empty
    <h1>La tabla no tiene datos</h1>
@endforelse