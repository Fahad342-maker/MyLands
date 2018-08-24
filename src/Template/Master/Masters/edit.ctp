<div class="actions columns col-lg-2 col-md-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="nav nav-stacked nav-pills">
        <li class="active disabled"><?= $this->Html->link(__('Edit Master'), ['action' => 'edit', $master->id]) ?> </li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $master->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $master->id), 'class' => 'btn-danger']
            )
        ?></li>
        <li><?= $this->Html->link(__('New Master'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Masters'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="masters form col-lg-10 col-md-9 columns">
    <?= $this->Form->create($master, [
        'type' => 'post',
    ]); ?>
    <fieldset>
        <legend><?= __('Edit Master') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('email');
            echo $this->Form->input('pass');
            echo $this->Form->input('subdomain');
            echo $this->Form->input('remarks');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
