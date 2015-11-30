<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Translation Request'), ['action' => 'add']) ?></li>
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
<div class="translationRequests index large-9 medium-8 columns content">
    <h3><?= __('Translation Requests') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('language_id') ?></th>
                <th><?= $this->Paginator->sort('source_id') ?></th>
                <th><?= $this->Paginator->sort('hash') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('translation_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($translationRequests as $translationRequest): ?>
            <tr>
                <td><?= $this->Number->format($translationRequest->id) ?></td>
                <td><?= $translationRequest->has('user') ? $this->Html->link($translationRequest->user->name, ['controller' => 'Users', 'action' => 'view', $translationRequest->user->id]) : '' ?></td>
                <td><?= $translationRequest->has('language') ? $this->Html->link($translationRequest->language->name, ['controller' => 'Languages', 'action' => 'view', $translationRequest->language->id]) : '' ?></td>
                <td><?= $translationRequest->has('source') ? $this->Html->link($translationRequest->source->id, ['controller' => 'Sources', 'action' => 'view', $translationRequest->source->id]) : '' ?></td>
                <td><?= h($translationRequest->hash) ?></td>
                <td><?= h($translationRequest->created) ?></td>
                <td><?= $translationRequest->has('translation') ? $this->Html->link($translationRequest->translation->id, ['controller' => 'Translations', 'action' => 'view', $translationRequest->translation->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $translationRequest->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $translationRequest->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $translationRequest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $translationRequest->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
