<h1>Lista</h1>
<ul>
@foreach ($cadastros as $user)
    <li>
        Nome: {{ $user->nome }} <a href="{{route('index.edit',$user->id)}}">Editar</a>-<a href="{{route('mostrar.destroy', $user->id)}}">Deletar</a><a href="{{route('inserir')}}">Inserir</a>-<br>
        Email: {{ $user->email }} <br>
        Senha: {{ $user->senha }} <br>
    </li>
@endforeach
</ul>
