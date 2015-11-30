<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Language'), ['action' => 'edit', $language->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Language'), ['action' => 'delete', $language->id], ['confirm' => __('Are you sure you want to delete # {0}?', $language->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Languages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Language'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Translation Requests'), ['controller' => 'TranslationRequests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Translation Request'), ['controller' => 'TranslationRequests', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Translations'), ['controller' => 'Translations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Translation'), ['controller' => 'Translations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="languages view large-9 medium-8 columns content">
    <h3><?= h($language->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Iso6392B') ?></th>
            <td><?= h($language->iso6392B) ?></td>
        </tr>
        <tr>
            <th><?= __('Bcp47') ?></th>
            <td><?= h($language->bcp47) ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($language->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($language->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($language->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($language->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($language->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Sources') ?></h4>
        <?php if (!empty($language->sources)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Foreignid') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Language Id') ?></th>
                <th><?= __('Text') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Meta Data') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($language->sources as $sources): ?>
            <tr>
                <td><?= h($sources->id) ?></td>
                <td><?= h($sources->foreignid) ?></td>
                <td><?= h($sources->user_id) ?></td>
                <td><?= h($sources->language_id) ?></td>
                <td><?= h($sources->text) ?></td>
                <td><?= h($sources->created) ?></td>
                <td><?= h($sources->modified) ?></td>
                <td><?= h($sources->meta_data) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sources', 'action' => 'view', $sources->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sources', 'action' => 'edit', $sources->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sources', 'action' => 'delete', $sources->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sources->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Translation Requests') ?></h4>
        <?php if (!empty($language->translation_requests)): ?>
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
            <?php foreach ($language->translation_requests as $translationRequests): ?>
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
        <?php if (!empty($language->translations)): ?>
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
            <?php foreach ($language->translations as $translations): ?>
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
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($language->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Password') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Vacation') ?></th>
                <th><?= __('Active') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($language->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->email) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->name) ?></td>
                <td><?= h($users->description) ?></td>
                <td><?= h($users->vacation) ?></td>
                <td><?= h($users->active) ?></td>
                <td><?= h($users->created) ?></td>
                <td><?= h($users->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
