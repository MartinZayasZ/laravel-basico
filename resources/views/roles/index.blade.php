<h1>Roles</h1>

<h3><a href="{{ action('RolesController@create') }}">Crear rol</a> </h3>

@if(session('status'))
    <p>{{ session('status') }}</p>
@endif

<ul>
    @foreach ($roles as $role)
        <li><a href="{{ action('RolesController@detail', ['id' => $role->id]) }}">{{ $role->name }}</a></li>
    @endforeach
</ul>
