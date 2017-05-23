<head>
 
 <?php
echo $this->Html->script('jquery-3.2.1.min');
 ?>
 
</head>
<body>
<div id="totalajax">
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ingrediente'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Recetas'), ['controller' => 'Recetas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Receta'), ['controller' => 'Recetas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ingredientes index large-9 medium-8 columns content">
    <h3><?= __('Ingredientes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ingredientes as $ingrediente): ?>
            <tr>
                <td><?= h($ingrediente->nombre) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ingrediente->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ingrediente->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ingrediente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ingrediente->id)]) ?>
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
</body>

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