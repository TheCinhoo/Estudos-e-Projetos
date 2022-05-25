<?php
/**
  * @var \App\View\AppView $this
  */
?>
<?= $this->Form->create($gerenciador) ?>
<div class="container">
  <form>
    <fieldset>
      <legend>Nova Tarefa</legend>
      <div class="form-group">
        <div class="col-lg-12">
          <?php echo $this->Form->input('titulo', ['class' => 'form-control' ]); ?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-lg-12">Descrição</label>
        <div class="col-lg-12">
          <?php echo $this->Form->textarea('descricao', ['class' => 'form-control' ]); ?>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-12 col-lg-offset-5">
          <br>
          <?php echo $this->html->link('Cancelar', ['action'=>'index'], ['class'=>'btn btn-default']) ?>
          <?php echo $this->Form->button(__('Enviar'), ['class'=>'btn btn-default']) ?>
        </div>
      </div>
    </fieldset>
  </form>
</div>
<?= $this->Form->end() ?>
