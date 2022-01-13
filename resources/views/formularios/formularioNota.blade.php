<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Numero</span>
    </div>
    <input type="text" class="form-control" required name="numero_nota">
</div>
<div class="input-group mb-3">
    <span class="input-group-text">Orcamento da nota</span>
    <select class="custom-select" name="orcamento_id" required>
        <option selected>Selecione o orcamento</option>
        @foreach ($orcamentos as $orcamento)
            <option value="{{$orcamento->id}}">{{$orcamento->numero}}</option>            
        @endforeach
    </select>
</div>
<button type="submit" class="btn btn-outline-success">Enviar</a>