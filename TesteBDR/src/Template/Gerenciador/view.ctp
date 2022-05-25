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

  <fieldset>

  <h3>Título: <?= h($gerenciador->titulo) ?></h3>
  <p><strong>ID:</strong> <?= $this->Number->format($gerenciador->id) ?></p>
  <hr>
  <h4><?= __('Descrição da Tarefa') ?></h4>
  <?= $this->Text->autoParagraph(h($gerenciador->descricao)); ?>
  <hr>

</fieldset>
</div>
