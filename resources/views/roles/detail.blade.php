@if(session('status'))
    <p>{{ session('status') }}</p>
@endif
<br>

<h1>{{ $role->name }}</h1>

<p>{{ $role->description }}</p>


<a href="{{ action('RolesController@delete', ['id' => $role->id ]) }}">Eliminar</a> <br>
<a href="{{ action('RolesController@update', ['id' => $role->id ]) }}">Actualizar</a>
