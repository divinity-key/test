<h2>記事一覧</h2>

<ul>
<?php foreach ($test_posts as $testPost) : ?>
<li>
<?php
echo h($testPost['TestPost']['title']);
?>
</li>
<?php endforeach; ?>
</ul>

<br>

<ul>
<?php foreach ($test_posts as $testPost) : ?>
<li>
<?php
debug($testPost);
?>
</li>
<?php endforeach; ?>
</ul>

