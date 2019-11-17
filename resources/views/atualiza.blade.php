<!doctype html>
<html>
<head>
<title>Forme</title>
<head>
<body>
<center>
<h1>Teste</h1>

@if( isset($cadastros) )
<form method="post" action="{{route('Cadastro.update', $cadastros->id)}}">
    {!! method_field('PUT') !!}
@else
<form method="post" action="{{route('Cadastro.store', $cadastros->id)}}">
@endif
{{ csrf_field() }}
<input type="text" name="nome" placeholder="Nome"><br><br><br>
<input type="text" name="email" placeholder="email"><br><br><b>
<input type="password" name="senha" placeholder="Senha"><br><br><br><br>
<input type="submit" value="Alterar"><br>

</form>
</center>
</body>
</html>