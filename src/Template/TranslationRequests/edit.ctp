<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $translationRequest->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $translationRequest->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Translation Requests'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Languages'), ['controller' => 'Languages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Language'), ['controller' => 'Languages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Translations'), ['controller' => 'Translations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Translation'), ['controller' => 'Translations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="translationRequests form large-9 medium-8 columns content">
    <?= $this->Form->create($translationRequest) ?>
    <fieldset>
        <legend><?= __('Edit Translation Request') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('language_id', ['options' => $languages]);
            echo $this->Form->input('source_id', ['options' => $sources]);
            echo $this->Form->input('hash');
            echo $this->Form->input('translation_id', ['options' => $translations, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
