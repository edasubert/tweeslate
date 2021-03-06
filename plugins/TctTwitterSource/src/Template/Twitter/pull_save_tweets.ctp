<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Twitter Queries'), ['controller' => 'TwitterQueries', 'action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="twitterQueries view large-9 medium-8 columns content">
    <h3>Add Tweet</h3>
    <p>Added tweets: <?= count($newSources) ?></p>
    <p>
      <ul>
        <?php foreach( $newSources as $source ): ?>
          <li>translate (<?= $source[0] ?>) to language (<?= $source[1] ?>)</li>
        <?php endforeach; ?>
      </ul>
    </p>
</div>
