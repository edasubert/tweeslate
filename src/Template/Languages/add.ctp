<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Languages'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Translation Requests'), ['controller' => 'TranslationRequests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Translation Request'), ['controller' => 'TranslationRequests', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Translations'), ['controller' => 'Translations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Translation'), ['controller' => 'Translations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="languages form large-9 medium-8 columns content">
    <?= $this->Form->create($language) ?>
    <fieldset>
        <legend><?= __('Add Language') ?></legend>
        <?php
            echo $this->Form->input('iso6392B');
            echo $this->Form->input('bcp47');
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('users._ids', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
