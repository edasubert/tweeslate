<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Twitter Queries'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Pull Save Tweets'), ['controller' => 'Twitter', 'action' => 'pullSaveTweets']) ?> </li>
    </ul>
</nav>
<div class="twitterQueries form large-9 medium-8 columns content">
    <?= $this->Form->create($twitterQuery) ?>
    <fieldset>
        <legend><?= __('Add Twitter Query') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('url');
            echo $this->Form->input('getfield');
            echo $this->Form->input('active');
            echo $this->Form->input('language_target');
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
