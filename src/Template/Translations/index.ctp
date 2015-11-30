<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Translation'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Languages'), ['controller' => 'Languages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Language'), ['controller' => 'Languages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Scorings'), ['controller' => 'Scorings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Scoring'), ['controller' => 'Scorings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Translation Requests'), ['controller' => 'TranslationRequests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Translation Request'), ['controller' => 'TranslationRequests', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="translations index large-9 medium-8 columns content">
    <h3><?= __('Translations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('language_id') ?></th>
                <th><?= $this->Paginator->sort('source_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($translations as $translation): ?>
            <tr>
                <td><?= $this->Number->format($translation->id) ?></td>
                <td><?= $translation->has('user') ? $this->Html->link($translation->user->name, ['controller' => 'Users', 'action' => 'view', $translation->user->id]) : '' ?></td>
                <td><?= $translation->has('language') ? $this->Html->link($translation->language->name, ['controller' => 'Languages', 'action' => 'view', $translation->language->id]) : '' ?></td>
                <td><?= $translation->has('source') ? $this->Html->link($translation->source->id, ['controller' => 'Sources', 'action' => 'view', $translation->source->id]) : '' ?></td>
                <td><?= h($translation->created) ?></td>
                <td><?= h($translation->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $translation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $translation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $translation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $translation->id)]) ?>
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
