<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Translation Request'), ['action' => 'edit', $translationRequest->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Translation Request'), ['action' => 'delete', $translationRequest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $translationRequest->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Translation Requests'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Translation Request'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Languages'), ['controller' => 'Languages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Language'), ['controller' => 'Languages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Translations'), ['controller' => 'Translations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Translation'), ['controller' => 'Translations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="translationRequests view large-9 medium-8 columns content">
    <h3><?= h($translationRequest->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $translationRequest->has('user') ? $this->Html->link($translationRequest->user->name, ['controller' => 'Users', 'action' => 'view', $translationRequest->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Language') ?></th>
            <td><?= $translationRequest->has('language') ? $this->Html->link($translationRequest->language->name, ['controller' => 'Languages', 'action' => 'view', $translationRequest->language->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Source') ?></th>
            <td><?= $translationRequest->has('source') ? $this->Html->link($translationRequest->source->id, ['controller' => 'Sources', 'action' => 'view', $translationRequest->source->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Hash') ?></th>
            <td><?= h($translationRequest->hash) ?></td>
        </tr>
        <tr>
            <th><?= __('Translation') ?></th>
            <td><?= $translationRequest->has('translation') ? $this->Html->link($translationRequest->translation->id, ['controller' => 'Translations', 'action' => 'view', $translationRequest->translation->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($translationRequest->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($translationRequest->created) ?></td>
        </tr>
    </table>
</div>
