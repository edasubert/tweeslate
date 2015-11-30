<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Scoring'), ['action' => 'edit', $scoring->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Scoring'), ['action' => 'delete', $scoring->id], ['confirm' => __('Are you sure you want to delete # {0}?', $scoring->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Scorings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Scoring'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Translations'), ['controller' => 'Translations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Translation'), ['controller' => 'Translations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="scorings view large-9 medium-8 columns content">
    <h3><?= h($scoring->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $scoring->has('user') ? $this->Html->link($scoring->user->name, ['controller' => 'Users', 'action' => 'view', $scoring->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Translation') ?></th>
            <td><?= $scoring->has('translation') ? $this->Html->link($scoring->translation->id, ['controller' => 'Translations', 'action' => 'view', $scoring->translation->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Hash') ?></th>
            <td><?= h($scoring->hash) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($scoring->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Result') ?></th>
            <td><?= $this->Number->format($scoring->result) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($scoring->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Closed') ?></th>
            <td><?= h($scoring->closed) ?></td>
        </tr>
    </table>
</div>
