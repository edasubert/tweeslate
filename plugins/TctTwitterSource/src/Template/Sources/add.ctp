<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sources'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Languages'), ['controller' => 'Languages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Language'), ['controller' => 'Languages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Translation Requests'), ['controller' => 'TranslationRequests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Translation Request'), ['controller' => 'TranslationRequests', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Translations'), ['controller' => 'Translations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Translation'), ['controller' => 'Translations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sources form large-9 medium-8 columns content">
    <?= $this->Form->create($source) ?>
    <fieldset>
        <legend><?= __('Add Source') ?></legend>
        <?php
            echo $this->Form->input('foreignid');
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('language_id', ['options' => $languages]);
            echo $this->Form->input('text');
            echo $this->Form->input('meta_data');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
