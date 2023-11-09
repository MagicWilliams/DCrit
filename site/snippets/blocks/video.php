<?php
use Kirby\Cms\Html;

/** @var \Kirby\Cms\Block $block */
?>
<?php if ($video = Html::video($block->url())): ?>
<?php $title = $block->title() ?>
<?php $video = Html::video($block->url(), [], ['title' => $title]) ?>
<figure>
  <div>
  <?php echo Html::video($block->url(), [], ['title' => $title]) ?>
  </div>
  <?php if ($block->caption()->isNotEmpty()): ?>
  <figcaption><?= $block->caption() ?></figcaption>
  <?php endif ?>
</figure>
<?php endif ?>