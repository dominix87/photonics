<?php

$topAccMenu = '{
	"pages":[
		{
			"title": "Login",
			"link": "#",
			"rel": "noopener"
		},
		{
			"title": "My Account",
			"link": "#",
			"rel": "noopener"
		},
		{
			"title": "Cart",
			"link": "#",
			"rel": "noopener"
		}
	]
}';

$topAccMenu = new \Module\Navigation\Builder($topAccMenu);
?>
<nav class="accLinks">
	<?= $topAccMenu->show(); ?>
</nav>


