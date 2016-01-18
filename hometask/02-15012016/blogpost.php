<?php
/**
 * Created by PhpStorm.
 * User: sergeypoliakov
 * Date: 13.01.16
 * Time: 21:07
 */

$data = [
    [
        'id' => 1,
        'title' => 'News #1',
        'description' => 'Shit shit shit',
        'date' => date('Y-m-d H:i'),
        'preview' => 'popa.jpeg',
		'previewAlt' => 'Something',
    ],
    [
        'id' => 1,
        'title' => 'News #1',
        'description' => 'Shit shit shit',
        'date' => date('Y-m-d H:i'),
        'preview' => 'popa.jpeg',
		'previewAlt' => 'Something',
    ],
    [
        'id' => 1,
        'title' => 'News #1',
        'description' => 'Shit shit shit',
        'date' => date('Y-m-d H:i'),
        'preview' => 'popa.jpeg',
		'previewAlt' => 'Something',
    ],
];
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<?php foreach ($data as $post): ?>
		<section>
			<h2><?= $post['title'] ?></h2>
			<p class="description"><?= $post['description'] ?></p>
			<p class="date"><?= $post['date'] ?></p>
			<p class="preview">
				<img src="<?= $post['preview'] ?>" alt="<?= $post['previewAlt'] ?>">
			</p>
            <p class="link">post.php?id=<?= $post['id'] ?></p>
        </section>
<?php endforeach; ?>
</body>
</html>