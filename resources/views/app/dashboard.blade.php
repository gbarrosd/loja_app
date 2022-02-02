@extends('layouts.template')

@section('template')
    @parent


@endsection
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                    <div class="card-header">Valor total</div>
                    <div class="card-body">
                        <h5 class="card-title">Orçamentos</h5>
                        <p class="card-text" style="color: white">
                            {{"R$ $valor_orc"}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                    <div class="card-header">Valor total</div>
                    <div class="card-body">
                        <h5 class="card-title">Orçamentos peças</h5>
                        <p class="card-text" style="color: white">
                            {{"R$ $valor_orc_pecas"}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                    <div class="card-header">Valor total</div>
                    <div class="card-body">
                        <h5 class="card-title">Orçamentos serviços</h5>
                        <p class="card-text" style="color: white">
                            {{"R$ $valor_orc_servicos"}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                    <div class="card-header">Valor total</div>
                    <div class="card-body">
                        <h5 class="card-title">Notas</h5>
                        <p class="card-text" style="color: white">
                            {{"R$ $valor_notas"}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                    <div class="card-header">Valor total</div>
                    <div class="card-body">
                        <h5 class="card-title">Notas peças</h5>
                        <p class="card-text" style="color: white">
                            {{"R$ $valor_not_pecas"}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                    <div class="card-header">Valor total</div>
                    <div class="card-body">
                        <h5 class="card-title">Notas serviços</h5>
                        <p class="card-text" style="color: white">
                            {{"R$ $valor_not_servicos"}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

