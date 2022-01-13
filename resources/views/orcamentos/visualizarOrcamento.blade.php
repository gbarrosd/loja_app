@extends('layouts.template')

@section('template')
    @parent


@endsection
@section('body')
    <div class="container">
        <!-- Example split danger button -->
            <button class="btn btn-outline-info float-right mb-1 btn-sm"
            data-toggle="modal" data-target="#modal-acao-orcamentos">Ação</button>
        <span class="bd-content-title"> ORCAMENTOS CADASTRADOS</span>
        <table class="table table-hover">
            <tbody>
                <tr>
                    <td>Numero</td>
                    <td>{{ $orcamento['numero'] }}</td>
                </tr>
                <tr>
                    <td>Veiculo</td>
                    <td>{{ $orcamento['veiculo'] }}</td>
                </tr>
                <tr>
                    <td>Placa</td>
                    <td>{{ $orcamento['placa'] }}</td>
                </tr>
                <tr>
                    <td>situacao</td>
                    <td>{{ $orcamento['situacao'] }}</td>
                </tr>
                <tr>
                    <td>Valor</td>
                    <td>{{ $orcamento['valor'] }}</td>
                </tr>
                <tr>
                    <td>15%</td>
                    <td>{{ $orcamento['porcento'] }}</td>
                </tr>
                <tr>
                    <td>Valor Final</td>
                    <td>{{ $orcamento['valor_real'] }}</td>
                </tr>
                <tr>
                    <td>Tipo</td>
                    <td>{{ $orcamento['tipo'] }}</td>
                </tr>
                <tr>
                    <td>Secretaria</td>
                    <td>{{ $orcamento['secretaria'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    @include('orcamentos.acao')
@endsection
