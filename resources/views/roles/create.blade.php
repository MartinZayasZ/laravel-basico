<h1>Nuevo rol</h1>

<form action="{{ action('RolesController@save') }}" method="POST">

    {{ csrf_field() }}

    <label for="nombre">Nombre</label>
    <input type="text" name="name"><br>

    <label for="description">Descripción</label>
    <input type="text" name="description"><br>

    <input type="submit" value="Guardar">

</form>
