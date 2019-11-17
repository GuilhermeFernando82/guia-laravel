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
    {!! method_field('DELETE') !!}
@else
<form method="post" action="{{route('Cadastro.store', $cadastros->id)}}">
@endif
{{ csrf_field() }}


@foreach ($cadastros as $user)
    <li>
        Nome: {{ $user->nome }} <br>
        Email: {{ $user->email }} <br>
        Senha: {{ $user->senha }} <br>
    </li>
@endforeach
</ul>
<input type="submit" value="Deleta"><br>
</form>
</center>
</body>
</html>