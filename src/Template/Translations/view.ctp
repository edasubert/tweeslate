<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Translation'), ['action' => 'edit', $translation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Translation'), ['action' => 'delete', $translation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $translation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Translations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Translation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Languages'), ['controller' => 'Languages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Language'), ['controller' => 'Languages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Scorings'), ['controller' => 'Scorings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Scoring'), ['controller' => 'Scorings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Translation Requests'), ['controller' => 'TranslationRequests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Translation Request'), ['controller' => 'TranslationRequests', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="translations view large-9 medium-8 columns content">
    <h3><?= h($translation->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $translation->has('user') ? $this->Html->link($translation->user->name, ['controller' => 'Users', 'action' => 'view', $translation->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Language') ?></th>
            <td><?= $translation->has('language') ? $this->Html->link($translation->language->name, ['controller' => 'Languages', 'action' => 'view', $translation->language->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Source') ?></th>
            <td><?= $translation->has('source') ? $this->Html->link($translation->source->id, ['controller' => 'Sources', 'action' => 'view', $translation->source->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($translation->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($translation->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($translation->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Text') ?></h4>
        <?= $this->Text->autoParagraph(h($translation->text)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Scorings') ?></h4>
        <?php if (!empty($translation->scorings)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Translation Id') ?></th>
                <th><?= __('Hash') ?></th>
                <th><?= __('Result') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Closed') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($translation->scorings as $scorings): ?>
            <tr>
                <td><?= h($scorings->id) ?></td>
                <td><?= h($scorings->user_id) ?></td>
                <td><?= h($scorings->translation_id) ?></td>
                <td><?= h($scorings->hash) ?></td>
                <td><?= h($scorings->result) ?></td>
                <td><?= h($scorings->created) ?></td>
                <td><?= h($scorings->closed) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Scorings', 'action' => 'view', $scorings->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Scorings', 'action' => 'edit', $scorings->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Scorings', 'action' => 'delete', $scorings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $scorings->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Translation Requests') ?></h4>
        <?php if (!empty($translation->translation_requests)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Language Id') ?></th>
                <th><?= __('Source Id') ?></th>
                <th><?= __('Hash') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Translation Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($translation->translation_requests as $translationRequests): ?>
            <tr>
                <td><?= h($translationRequests->id) ?></td>
                <td><?= h($translationRequests->user_id) ?></td>
                <td><?= h($translationRequests->language_id) ?></td>
                <td><?= h($translationRequests->source_id) ?></td>
                <td><?= h($translationRequests->hash) ?></td>
                <td><?= h($translationRequests->created) ?></td>
                <td><?= h($translationRequests->translation_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'TranslationRequests', 'action' => 'view', $translationRequests->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'TranslationRequests', 'action' => 'edit', $translationRequests->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'TranslationRequests', 'action' => 'delete', $translationRequests->id], ['confirm' => __('Are you sure you want to delete # {0}?', $translationRequests->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
