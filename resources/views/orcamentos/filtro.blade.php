<div class="modal fade" id="modal-filtro-orcamentos" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('orcamento:list') }}" method="GET">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Filtrar por período e/ou situacao</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col">
                            <label>Filtrar por período</label>
                            <label>
                                Data inicial
                                <input type="date" name="filtroPeriodoInicial">
                            </label>
                            <label>
                                Data final
                                <input type="date" name="filtroPeriodoFinal">
                            </label>
                        </div>
                        <div class="col">
                            <label>Filtrar por situação</label>
                            <select class="form-control" name="situacaoFiltro">
                                <option value="">Selecione a situação</option>
                                    <option value="Gerada">
                                        Gerada
                                    </option>
                                    <option value="Entregue">
                                        Entregue
                                    </option>
                                    <option value="Emitida">
                                        Ordem Emitida
                                    </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
            </div>
        </form>
    </div>
</div>
