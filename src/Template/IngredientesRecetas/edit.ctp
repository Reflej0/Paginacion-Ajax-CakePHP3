<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ingredientesReceta->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ingredientesReceta->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ingredientes Recetas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ingredientes'), ['controller' => 'Ingredientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ingrediente'), ['controller' => 'Ingredientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Recetas'), ['controller' => 'Recetas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Receta'), ['controller' => 'Recetas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ingredientesRecetas form large-9 medium-8 columns content">
    <?= $this->Form->create($ingredientesReceta) ?>
    <fieldset>
        <legend><?= __('Edit Ingredientes Receta') ?></legend>
        <?php
            echo $this->Form->control('ingrediente_id', ['options' => $ingredientes]);
            echo $this->Form->control('receta_id', ['options' => $recetas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
