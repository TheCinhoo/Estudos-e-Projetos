<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="container">
  <nav>
  <?= $this->Html->link(__('Lista de Tarefas'), ['action' => 'index'],['class'=>'btn btn-default']) ?>
  <?= $this->Html->link(__('Nova Tarefa'), ['action' => 'add'], ['class'=>'btn btn-default']) ?>
  <?= $this->Html->link(__('Editar Tarefa '), ['action' => 'edit', $gerenciador->id], ['class'=>'btn btn-default']) ?>
  <?= $this->Form->postLink(__('Deletar Tarefa'), ['action' => 'delete', $gerenciador->id], ['class'=>'btn btn-default'], ['confirm' => __('Você tem certeza que deseja deletar a tarefa #{0}?', $gerenciador->id)]) ?>
  </nav>

  <div class="gerenciador form large-9 medium-8 columns content">
    <?= $this->Form->create($gerenciador) ?>
    <fieldset>
      <legend><?= __('Editar Tarefa') ?></legend>
      <?php
        echo $this->Form->control('titulo', ['class' => 'form-control' ]);
        echo $this->Form->control('descricao', ['class' => 'form-control' ]);
      ?>
    </fieldset>
    <div class="col-lg-12 col-lg-offset-5">
      <br>
      <?php echo $this->html->link('Cancelar', ['action'=>'index'], ['class'=>'btn btn-default']) ?>
      <?php echo $this->Form->button(__('Atualizar'), ['class'=>'btn btn-default']) ?>
    </div>
  <?= $this->Form->end() ?>
  </div>
</div>
