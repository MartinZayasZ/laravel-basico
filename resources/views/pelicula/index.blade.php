<h1>{{ $titulo }}</h1>

@if( isset($pagina) )
<h2>Estoy en la página {{ $pagina }}</h2>
@endif


<a href="{{ route('detalle.pelicula') }}">Ir al detalle</a>
