@extends('layout')

@section('cabecalho')
Séries
@endsection

@section('conteudo')

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST">
    @csrf
    <div class="form-group">
        <label for="nome">Nome Da Série</label>
        <input type="text" class="form-control" name="nome" id="nome">
    </div>

    <button class="btn btn-primary">Adicionar</button>

</form>
@endsection