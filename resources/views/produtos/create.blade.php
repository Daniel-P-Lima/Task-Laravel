<h1>{{ isset($produto) ? 'Editar Produto' : 'Criar Produto' }}</h1>

<form method="POST" action="{{ isset($produto) ? route('produtos.update', $produto) : route('produtos.store') }}">
    @csrf
    @if(isset($produto))
        @method('PUT')
    @endif

    <label>Nome:</label>
    <input type="text" name="nome" value="{{ $produto->nome ?? '' }}" required>

    <label>Descrição:</label>
    <textarea name="descricao" required>{{ $produto->descricao ?? '' }}</textarea>

    <label>Preço:</label>
    <input type="number" step="0.01" name="preco" value="{{ $produto->preco ?? '' }}" required>

    <button type="submit">{{ isset($produto) ? 'Atualizar' : 'Salvar' }}</button>
</form>
