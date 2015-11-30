<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Source'), ['action' => 'add']) ?></li>
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
<div class="sources index large-9 medium-8 columns content">
    <h3><?= __('Sources') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('foreignid') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('language_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sources as $source): ?>
            <tr>
                <td><?= $this->Number->format($source->id) ?></td>
                <td><?= h($source->foreignid) ?></td>
                <td><?= $source->has('user') ? $this->Html->link($source->user->name, ['controller' => 'Users', 'action' => 'view', $source->user->id]) : '' ?></td>
                <td><?= $source->has('language') ? $this->Html->link($source->language->name, ['controller' => 'Languages', 'action' => 'view', $source->language->id]) : '' ?></td>
                <td><?= h($source->created) ?></td>
                <td><?= h($source->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $source->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $source->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $source->id], ['confirm' => __('Are you sure you want to delete # {0}?', $source->id)]) ?>
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
