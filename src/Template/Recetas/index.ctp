<head>
 
 <?php
echo $this->Html->script('jquery-3.2.1.min');
 ?>
 
</head>
<div id="totalajax">
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Receta'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ingredientes'), ['controller' => 'Ingredientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ingrediente'), ['controller' => 'Ingredientes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="recetas index large-9 medium-8 columns content">
    <h3><?= __('Recetas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($recetas as $receta): ?>
            <tr>
                <td><?= h($receta->nombre) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $receta->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $receta->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $receta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $receta->id)]) ?>
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
</div>

<script type="text/javascript">
$(document).ready(function () {
$(".pagination a").bind("click", function (event) {
    if(!$(this).attr('href'))
        return false;
    $.ajax({
        type: 'POST',
        dataType: "html", 
        evalScripts:true,
        success:function (data, textStatus) {
            $("#totalajax").html(data);
        }, 
        url:$(this).attr('href')});
        return false;
    });
    });
</script>