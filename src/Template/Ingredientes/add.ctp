<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ingredientes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Recetas'), ['controller' => 'Recetas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Receta'), ['controller' => 'Recetas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ingredientes form large-9 medium-8 columns content">
    <?= $this->Form->create($ingrediente) ?>
    <fieldset>
        <legend><?= __('Add Ingrediente') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('recetas._ids', ['options' => $recetas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
