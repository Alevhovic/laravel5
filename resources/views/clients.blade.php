<h1>Clients</h1>

<ul>

	<?php foreach ($clients as $client): ?>
		
		<li><?= $client; ?></li>
	
	<?php endforeach; ?>
	
</ul>

<h2>Special Token : <?= $special_token; ?></h2>