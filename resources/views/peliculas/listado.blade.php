@include('includes.header')
<hr>

<h1>{{ $titulo }}</h1>

{{-- hola --}} 

{{ $director ?? 'No hay director' }}


<!-- CONDICIONALES -->

@if( $titulo )
    <h1>EL TITULO EXISTE: {{ $titulo }}</h1>
@else
    <h1>El titulo no existe</h1>
@endif



<!-- BUCLES -->

@for ($i = 0; $i < 20; $i++)
    <p>El número es: {{ $i }}</p>
@endfor
<br>
----------------------------------
<br>
<?php $contador = 1; ?>
@while ( $contador < 50 )
    @if ($contador % 2 == 0)
        NÚMERO PAR {{ $contador }}
    @endif

    <?php $contador++; ?>
@endwhile
<br>
----------------------------------
<br>
@foreach( $listado as $pelicula)
    <p>{{ $pelicula }}</p>
@endforeach

<hr>
@include('includes.footer')
