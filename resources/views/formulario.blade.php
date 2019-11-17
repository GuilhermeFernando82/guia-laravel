<!doctype html>
<html>
<head>
<title>Forme</title>
<head>
<body>
<center>
<h1>Teste</h1>
<form method="post" action="{{route('Cadastro.store')}}">
{{ csrf_field() }}
<input type="text" name="nome" placeholder="Nome"><br><br><br>
<input type="text" name="email" placeholder="email"><br><br><b>
<input type="password" name="senha" placeholder="Senha"><br><br><br><br>
<input type="submit" value="Manda bala"><br>

</form>
</center>
</body>
</html>