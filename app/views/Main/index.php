<h1>Hellow, world</h1>
<p></p>
<p><?= $name; ?></p>
<?php foreach ($posts as $post): ?>
    <h3><?= $post->title;?></h3>
<?php endforeach; ?>
