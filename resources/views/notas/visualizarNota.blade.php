@extends('layouts.template')

@section('template')
    @parent


@endsection
@section('body')
    <div class="container">
        <!-- Example split danger button -->
            <button class="btn btn-outline-info float-right mb-1 btn-sm"
            data-toggle="modal" data-target="#modal-acao-notas">Ação</button>
        <span class="bd-content-title"> NOTAS CADASTRADOS</span>
        <table class="table table-hover">
            <tbody>
                <tr>
                    <td>Numero</td>
                    <td>{{ $nota->numero_nota}}</td>
                </tr>
                <tr>
                    <td>Numero Orcamento</td>
                    <td>{{ $nota->numero}}</td>
                </tr>
                <tr>
                    <td>Veiculo</td>
                    <td>{{ $nota->veiculo }}</td>
                </tr>
                <tr>
                    <td>Placa</td>
                    <td>{{ $nota->placa }}</td>
                </tr>
                <tr>
                    <td>situacao</td>
                    <td>{{ $nota->situacao}}</td>
                </tr>
                <tr>
                    <td>Valor</td>
                    <td>{{ $nota->valor }}</td>
                </tr>
                <tr>
                    <td>15%</td>
                    <td>{{ $nota->porcento }}</td>
                </tr>
                <tr>
                    <td>Valor Final</td>
                    <td>{{ $nota->valor_real }}</td>
                </tr>
                <tr>
                    <td>Tipo</td>
                    <td>{{ $nota->tipo }}</td>
                </tr>
                <tr>
                    <td>Secretaria</td>
                    <td>{{ $nota->secretaria }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    @include('notas.acao')
@endsection
