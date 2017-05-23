<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ingredientes Receta'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ingredientes'), ['controller' => 'Ingredientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ingrediente'), ['controller' => 'Ingredientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Recetas'), ['controller' => 'Recetas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Receta'), ['controller' => 'Recetas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ingredientesRecetas index large-9 medium-8 columns content">
    <h3><?= __('Ingredientes Recetas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ingrediente_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('receta_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ingredientesRecetas as $ingredientesReceta): ?>
            <tr>
                <td><?= $this->Number->format($ingredientesReceta->id) ?></td>
                <td><?= $ingredientesReceta->has('ingrediente') ? $this->Html->link($ingredientesReceta->ingrediente->id, ['controller' => 'Ingredientes', 'action' => 'view', $ingredientesReceta->ingrediente->id]) : '' ?></td>
                <td><?= $ingredientesReceta->has('receta') ? $this->Html->link($ingredientesReceta->receta->id, ['controller' => 'Recetas', 'action' => 'view', $ingredientesReceta->receta->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ingredientesReceta->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ingredientesReceta->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ingredientesReceta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ingredientesReceta->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
