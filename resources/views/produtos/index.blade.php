<h1>Lista de Produtos</h1>
<a href="{{ route('produtos.create') }}">Criar Produto</a>
<table>
    <tr>
        <th>Nome</th>
        <th>Preço</th>
        <th>Ações</th>
    </tr>
    @foreach ($produtos as $produto)
    <tr>
        <td>{{ $produto->nome }}</td>
        <td>{{ $produto->preco }}</td>
        <td>
            <a href="{{ route('produtos.show', $produto) }}">Ver</a>
            <a href="{{ route('produtos.edit', $produto) }}">Editar</a>
            <form action="{{ route('produtos.destroy', $produto) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Deletar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
