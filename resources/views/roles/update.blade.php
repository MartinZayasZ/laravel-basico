<h1>Actualizar rol</h1>

<form action="{{ action('RolesController@update2', ['id' => $role->id]) }}" method="POST">

    {{ csrf_field() }}
    <input type="hidden" value="{{ $role->id }}">

    <label for="nombre">Nombre</label>
    <input type="text" name="name" value="{{ $role->name }}"><br>

    <label for="description">Descripción</label>
    <input type="text" name="description" value="{{ $role->description }}"><br>

    <input type="submit" value="Actualizar">

</form>
