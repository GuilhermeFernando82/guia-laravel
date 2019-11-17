<!doctype html>
<html>
<head>
<title>Forme</title>
<head>
<body>
<center>
<h1>Teste</h1>

@if( isset($cadastros) )
<form method="post" action="{{route('Cadastro.destroy', $cadastros->id)}}">
    {!! method_field('PUT') !!}
@else
<form method="post" action="{{route('Cadastro.store', $cadastros->id)}}">
@endif
{{ csrf_field() }}

<input type="submit" value="Deleta"><br>

</form>
</center>
</body>
</html>