@extends('layouts.template')

@section('template')
    @parent


@endsection
@section('body')

    <div class="container">
        <form action="{{route('orcamento:store')}}" method="post">
            @csrf
            @include('formularios.formularioOrcamento')
        </form>
    </div>

@endsection