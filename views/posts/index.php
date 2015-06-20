<?php foreach ($posts as $post): ?>
    <ul>
        <li><?php echo $post['id']; ?></li>
        <li><?php echo $post['title']; ?></li>
        <li><?php echo $post['content']; ?></li>
    </ul>
<?php endforeach; ?>

