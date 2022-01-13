@extends('layouts.template')

@section('template')
    @parent


@endsection
@section('body')
    <div class="container">
        <button class="btn btn-outline-info float-right mb-1 btn-sm"
            data-toggle="modal" data-target="#modal-filtro-notas">Filtros</button>
        <span class="bd-content-title">Notas</span>
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
                @foreach ($notas as $nota)
                    <tr>
                        <td>{{ $nota->numero_nota }}</td>
                        <td>{{ $nota->veiculo }}</td>
                        <td>{{ $nota->placa }}</td>
                        <td>{{ $nota->situacao }}</td>
                        <td>{{ $nota->valor }}</td>
                        <td>{{ $nota->tipo }}</td>
                        <td>
                            <a href="{{route('nota:view', $nota->id)}}" style="color: inherit"><i class="fa fa-info"></i>
                                 Detalhes
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @include('notas.filtro')
@endsection
