<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Twitter Query'), ['action' => 'edit', $twitterQuery->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Twitter Query'), ['action' => 'delete', $twitterQuery->id], ['confirm' => __('Are you sure you want to delete # {0}?', $twitterQuery->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Twitter Queries'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Twitter Query'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Pull Save Tweets'), ['controller' => 'Twitter', 'action' => 'pullSaveTweets']) ?> </li>
    </ul>
</nav>
<div class="twitterQueries view large-9 medium-8 columns content">
    <h3><?= h($twitterQuery->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $twitterQuery->has('user') ? $this->Html->link($twitterQuery->user->name, ['controller' => 'Users', 'action' => 'view', $twitterQuery->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Url') ?></th>
            <td><?= h($twitterQuery->url) ?></td>
        </tr>
        <tr>
            <th><?= __('Getfield') ?></th>
            <td><?= h($twitterQuery->getfield) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($twitterQuery->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Language Target') ?></th>
            <td><?= $this->Number->format($twitterQuery->language_target) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($twitterQuery->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Active') ?></th>
            <td><?= $twitterQuery->active ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($twitterQuery->description)); ?>
    </div>
</div>
