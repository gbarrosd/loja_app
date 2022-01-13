<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Numero</span>
    </div>
    <input type="text" class="form-control" required name="numero">
</div>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Veiculo</span>
    </div>
    <input type="text" class="form-control" required name="veiculo">
</div>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Placa</span>
    </div>
    <input type="text" class="form-control" required name="placa">
</div>
<div class="input-group mb-3">
    <span class="input-group-text">Situação</span>
    <select class="custom-select" name="situacao" required>
        <option selected>Selecione a situação</option>
        <option value="Gerada">Gerada</option>
        <option value="Entregue">Entregue</option>
        <option value="Emitida">Emitida Ordem</option>
    </select>
</div>
<div class="input-group mb-3">
    <span class="input-group-text">Tipo do orcamento</span>
    <select class="custom-select" name="tipo" required>
        <option selected>Selecione o tipo</option>
        <option value="Peças">Peças</option>
        <option value="Serviço">Serviço</option>
    </select>
</div>
<div class="input-group mb-3">
    <span class="input-group-text">Secretaria</span>
    <select class="custom-select" name="secretaria" required>
        <option selected>Selecione a secretaria</option>
        <option value="Agricultura">Agricultura</option>
        <option value="Saude">Saude</option>
        <option value="Ass Social">Ass Social</option>
        <option value="Educação">Educação</option>
        <option value="Obras">Obras</option>
    </select>
</div>
<div class="input-group mb-3">
    <span class="input-group-text">Valor</span>
    <input required type="text" class="form-control" name="valor">
    <div class="input-group-append">
      <span class="input-group-text">$</span>
    </div>
</div>
<div class="input-group mb-3">
    <span class="input-group-text">15%</span>
    <input required type="text" class="form-control" name="porcento">
    <div class="input-group-append">
      <span class="input-group-text">%</span>
    </div>
</div>
<div class="input-group mb-3">
    <span class="input-group-text">Valor final</span>
    <input required type="text" class="form-control" name="valor_real">
    <div class="input-group-append">
      <span class="input-group-text">$</span>
    </div>
</div>
<button type="submit" class="btn btn-outline-success">Enviar</a>
  
