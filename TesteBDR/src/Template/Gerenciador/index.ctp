<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="container">
  <nav>
    <?= $this->Html->link(__('Nova Tarefa'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
    <?= $this->Html->link(__('Fizz Buzz'), ['action' => 'fizzbuzz'], ['class' => 'btn btn-primary']) ?>
  </nav>

  <h2>Todas as Tarefas</h2>
  <br>
  <div class="row">
    <table class="table table-striped table-hover ">
      <thead>
        <tr>
          <th class="col-lg-1">#</th>
          <th class="col-lg-9">Título</th>
          <th class="col-lg-2">Opções</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php foreach ($gerenciador as $gerenciador): ?>
          <tr>
            <td><?= $this->Number->format($gerenciador->id) ?></td>
            <td><?= h($gerenciador->titulo) ?></td>
            <td>
              <?= $this->Html->link(__('Ver'), ['action' => 'view', $gerenciador->id], ['class'=>'btn btn-success btn-xs']) ?>
              <?= $this->Html->link(__('Editar'), ['action' => 'edit', $gerenciador->id], ['class'=>'btn btn-info btn-xs']) ?>
              <?= $this->Form->postLink(__('X'), ['action' => 'delete', $gerenciador->id], ['class'=>'btn btn-danger btn-xs'], ['confirm' => __('Tem certeza #{0}?', $gerenciador->id)]) ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </tr>
      </tbody>
    </table>
  </div>

</div>
</div>
