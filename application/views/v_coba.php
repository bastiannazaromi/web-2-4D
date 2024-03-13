<h1>
	Hello World!
</h1>

<ul>
	<?php foreach ($user as $u) : ?>
		<li><?php echo $u->nama; ?></li>
	<?php endforeach; ?>
</ul>