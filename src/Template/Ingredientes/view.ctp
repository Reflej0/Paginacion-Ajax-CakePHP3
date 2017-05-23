<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ingrediente'), ['action' => 'edit', $ingrediente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ingrediente'), ['action' => 'delete', $ingrediente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ingrediente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ingredientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ingrediente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Recetas'), ['controller' => 'Recetas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Receta'), ['controller' => 'Recetas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ingredientes view large-9 medium-8 columns content">
    <h3><?= h($ingrediente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($ingrediente->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ingrediente->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Recetas') ?></h4>
        <?php if (!empty($ingrediente->recetas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($ingrediente->recetas as $recetas): ?>
            <tr>
                <td><?= h($recetas->id) ?></td>
                <td><?= h($recetas->nombre) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Recetas', 'action' => 'view', $recetas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Recetas', 'action' => 'edit', $recetas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Recetas', 'action' => 'delete', $recetas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recetas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
