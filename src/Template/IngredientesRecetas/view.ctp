<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ingredientes Receta'), ['action' => 'edit', $ingredientesReceta->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ingredientes Receta'), ['action' => 'delete', $ingredientesReceta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ingredientesReceta->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ingredientes Recetas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ingredientes Receta'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ingredientes'), ['controller' => 'Ingredientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ingrediente'), ['controller' => 'Ingredientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Recetas'), ['controller' => 'Recetas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Receta'), ['controller' => 'Recetas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ingredientesRecetas view large-9 medium-8 columns content">
    <h3><?= h($ingredientesReceta->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ingrediente') ?></th>
            <td><?= $ingredientesReceta->has('ingrediente') ? $this->Html->link($ingredientesReceta->ingrediente->id, ['controller' => 'Ingredientes', 'action' => 'view', $ingredientesReceta->ingrediente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Receta') ?></th>
            <td><?= $ingredientesReceta->has('receta') ? $this->Html->link($ingredientesReceta->receta->id, ['controller' => 'Recetas', 'action' => 'view', $ingredientesReceta->receta->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ingredientesReceta->id) ?></td>
        </tr>
    </table>
</div>
