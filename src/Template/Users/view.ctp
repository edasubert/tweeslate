<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Scorings'), ['controller' => 'Scorings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Scoring'), ['controller' => 'Scorings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Translation Requests'), ['controller' => 'TranslationRequests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Translation Request'), ['controller' => 'TranslationRequests', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Translations'), ['controller' => 'Translations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Translation'), ['controller' => 'Translations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Languages'), ['controller' => 'Languages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Language'), ['controller' => 'Languages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Attributes'), ['controller' => 'UserAttributes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Attribute'), ['controller' => 'UserAttributes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Vacation') ?></th>
            <td><?= h($user->vacation) ?></td>
        </tr>
        <tr>
            <th><?= __('Active') ?></th>
            <td><?= h($user->active) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($user->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Scorings') ?></h4>
        <?php if (!empty($user->scorings)): ?>
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
            <?php foreach ($user->scorings as $scorings): ?>
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
        <h4><?= __('Related Sources') ?></h4>
        <?php if (!empty($user->sources)): ?>
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
            <?php foreach ($user->sources as $sources): ?>
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
        <?php if (!empty($user->translation_requests)): ?>
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
            <?php foreach ($user->translation_requests as $translationRequests): ?>
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
        <?php if (!empty($user->translations)): ?>
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
            <?php foreach ($user->translations as $translations): ?>
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
        <h4><?= __('Related Languages') ?></h4>
        <?php if (!empty($user->languages)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Iso6392B') ?></th>
                <th><?= __('Bcp47') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->languages as $languages): ?>
            <tr>
                <td><?= h($languages->id) ?></td>
                <td><?= h($languages->iso6392B) ?></td>
                <td><?= h($languages->bcp47) ?></td>
                <td><?= h($languages->name) ?></td>
                <td><?= h($languages->description) ?></td>
                <td><?= h($languages->created) ?></td>
                <td><?= h($languages->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Languages', 'action' => 'view', $languages->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Languages', 'action' => 'edit', $languages->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Languages', 'action' => 'delete', $languages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $languages->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related User Attributes') ?></h4>
        <?php if (!empty($user->user_attributes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Prefix') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->user_attributes as $userAttributes): ?>
            <tr>
                <td><?= h($userAttributes->id) ?></td>
                <td><?= h($userAttributes->prefix) ?></td>
                <td><?= h($userAttributes->name) ?></td>
                <td><?= h($userAttributes->description) ?></td>
                <td><?= h($userAttributes->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UserAttributes', 'action' => 'view', $userAttributes->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'UserAttributes', 'action' => 'edit', $userAttributes->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserAttributes', 'action' => 'delete', $userAttributes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userAttributes->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
