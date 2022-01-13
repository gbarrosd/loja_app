@extends('layouts.template')

@section('template')
    @parent


@endsection
@section('body')
    <div class="container">
        <button class="btn btn-outline-info float-right mb-1 btn-sm"
            data-toggle="modal" data-target="#modal-filtro-orcamentos">Filtros</button>
        <span class="bd-content-title">ORCAMENTOS</span>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Veiculo</th>
                    <th scope="col">Placa</th>
                    <th scope="col">Situacao</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Tipo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orcamentos as $orcamento)
                    <tr>
                        <td>{{ $orcamento->numero }}</td>
                        <td>{{ $orcamento->veiculo }}</td>
                        <td>{{ $orcamento->placa }}</td>
                        <td>{{ $orcamento->situacao }}</td>
                        <td>{{ $orcamento->valor }}</td>
                        <td>{{ $orcamento->tipo }}</td>
                        <td>
                            <a href="{{route('orcamento:view', $orcamento->id)}}" style="color: inherit"><i class="fa fa-info"></i>
                                 Detalhes
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @include('orcamentos.filtro')
@endsection
