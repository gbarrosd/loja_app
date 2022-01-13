@extends('layouts.template')

@section('template')
    @parent


@endsection
@section('body')

    <div class="container">
        <form action="{{route('nota:store')}}" method="post">
            @csrf
            @include('formularios.formularioNota')
        </form>
    </div>

@endsection