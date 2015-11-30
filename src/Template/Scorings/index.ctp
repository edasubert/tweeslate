<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Scoring'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Translations'), ['controller' => 'Translations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Translation'), ['controller' => 'Translations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="scorings index large-9 medium-8 columns content">
    <h3><?= __('Scorings') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('translation_id') ?></th>
                <th><?= $this->Paginator->sort('hash') ?></th>
                <th><?= $this->Paginator->sort('result') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('closed') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($scorings as $scoring): ?>
            <tr>
                <td><?= $this->Number->format($scoring->id) ?></td>
                <td><?= $scoring->has('user') ? $this->Html->link($scoring->user->name, ['controller' => 'Users', 'action' => 'view', $scoring->user->id]) : '' ?></td>
                <td><?= $scoring->has('translation') ? $this->Html->link($scoring->translation->id, ['controller' => 'Translations', 'action' => 'view', $scoring->translation->id]) : '' ?></td>
                <td><?= h($scoring->hash) ?></td>
                <td><?= $this->Number->format($scoring->result) ?></td>
                <td><?= h($scoring->created) ?></td>
                <td><?= h($scoring->closed) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $scoring->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $scoring->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $scoring->id], ['confirm' => __('Are you sure you want to delete # {0}?', $scoring->id)]) ?>
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
