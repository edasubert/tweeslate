<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $scoring->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $scoring->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Scorings'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Translations'), ['controller' => 'Translations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Translation'), ['controller' => 'Translations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="scorings form large-9 medium-8 columns content">
    <?= $this->Form->create($scoring) ?>
    <fieldset>
        <legend><?= __('Edit Scoring') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('translation_id', ['options' => $translations]);
            echo $this->Form->input('hash');
            echo $this->Form->input('result');
            echo $this->Form->input('closed');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
