<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Receta'), ['action' => 'edit', $receta->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Receta'), ['action' => 'delete', $receta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $receta->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Recetas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Receta'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ingredientes'), ['controller' => 'Ingredientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ingrediente'), ['controller' => 'Ingredientes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="recetas view large-9 medium-8 columns content">
    <h3><?= h($receta->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($receta->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($receta->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Ingredientes') ?></h4>
        <?php if (!empty($receta->ingredientes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($receta->ingredientes as $ingredientes): ?>
            <tr>
                <td><?= h($ingredientes->id) ?></td>
                <td><?= h($ingredientes->nombre) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ingredientes', 'action' => 'view', $ingredientes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ingredientes', 'action' => 'edit', $ingredientes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ingredientes', 'action' => 'delete', $ingredientes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ingredientes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
