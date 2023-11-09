<?php /** @var \Kirby\Cms\Block $block */ 

$list = $block->text();
$list = preg_replace('/<li>/', '<li>                <span class="bullet" aria-hidden="true">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="26" height="26" viewBox="0 0 26 26"><circle cx="13" cy="13" r="12" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="2"/><circle cx="13" cy="13" r="2"/></svg>
</span><span class="bullet-text">', $list);
$list = preg_replace("/<\/li>/", "</span></li>", $list);

?>
<?= $list;

