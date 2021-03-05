<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
@forelse ($contacts as $contact)
<h3>MIS CONTACTOS :)</h3>
    <li>
       
        <h3><h1> ☎️ · 📱 ·  📞 ·  ☎️ · 📱 · 📞 · ☎️ · 📱 · 📞 · ☎️.</h1></h3>
        <h5>{{ $contact->fullname }}</h5>
        <h5>{{ $contact->mailaddress }}</h5>
        <p>{{ $contact->city }}</p>
        <br>
        <h3>____________________________________________________________________________________________________________________</h3>
    </li>
@empty
    <h1>La tabla no tiene datos</h1>
@endforelse
