<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Source'), ['action' => 'edit', $source->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Source'), ['action' => 'delete', $source->id], ['confirm' => __('Are you sure you want to delete # {0}?', $source->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sources'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Source'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Languages'), ['controller' => 'Languages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Language'), ['controller' => 'Languages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Translation Requests'), ['controller' => 'TranslationRequests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Translation Request'), ['controller' => 'TranslationRequests', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Translations'), ['controller' => 'Translations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Translation'), ['controller' => 'Translations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sources view large-9 medium-8 columns content">
    <h3><?= h($source->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Foreignid') ?></th>
            <td><?= h($source->foreignid) ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $source->has('user') ? $this->Html->link($source->user->name, ['controller' => 'Users', 'action' => 'view', $source->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Language') ?></th>
            <td><?= $source->has('language') ? $this->Html->link($source->language->name, ['controller' => 'Languages', 'action' => 'view', $source->language->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($source->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($source->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($source->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Text') ?></h4>
        <?= $this->Text->autoParagraph(h($source->text)); ?>
    </div>
    <div class="row">
        <h4><?= __('Meta Data') ?></h4>
        <?= $this->Text->autoParagraph(h($source->meta_data)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Translation Requests') ?></h4>
        <?php if (!empty($source->translation_requests)): ?>
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
            <?php foreach ($source->translation_requests as $translationRequests): ?>
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
    <div class="related">
        <h4><?= __('Related Translations') ?></h4>
        <?php if (!empty($source->translations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Language Id') ?></th>
                <th><?= __('Source Id') ?></th>
                <th><?= __('Text') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($source->translations as $translations): ?>
            <tr>
                <td><?= h($translations->id) ?></td>
                <td><?= h($translations->user_id) ?></td>
                <td><?= h($translations->language_id) ?></td>
                <td><?= h($translations->source_id) ?></td>
                <td><?= h($translations->text) ?></td>
                <td><?= h($translations->created) ?></td>
                <td><?= h($translations->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Translations', 'action' => 'view', $translations->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Translations', 'action' => 'edit', $translations->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Translations', 'action' => 'delete', $translations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $translations->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
