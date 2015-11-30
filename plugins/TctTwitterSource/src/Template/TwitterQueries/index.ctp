<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Twitter Query'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Pull Push Tweets'), ['controller' => 'Twitter', 'action' => 'pullSaveTweets']) ?></li>
    </ul>
</nav>
<div class="twitterQueries index large-9 medium-8 columns content">
    <h3><?= __('Twitter Queries') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('url') ?></th>
                <th><?= $this->Paginator->sort('getfield') ?></th>
                <th><?= $this->Paginator->sort('active') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($twitterQueries as $twitterQuery): ?>
            <tr>
                <td><?= $this->Number->format($twitterQuery->id) ?></td>
                <td><?= $twitterQuery->has('user') ? $this->Html->link($twitterQuery->user->name, ['controller' => 'Users', 'action' => 'view', $twitterQuery->user->id]) : '' ?></td>
                <td><?= h($twitterQuery->url) ?></td>
                <td><?= h($twitterQuery->getfield) ?></td>
                <td><?= h($twitterQuery->active) ?></td>
                <td><?= h($twitterQuery->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $twitterQuery->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $twitterQuery->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $twitterQuery->id], ['confirm' => __('Are you sure you want to delete # {0}?', $twitterQuery->id)]) ?>
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
