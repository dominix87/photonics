<?php
$footerMenu = '{
	"pages":[
		{
			"title": "Home",
			"link": "/",
			"rel": "noopener"
		},
		{
			"title": "Store Policies",
			"link": "#",
			"rel": "noopener"
		},
		{
			"title": "Driving Directions",
			"link": "#",
			"rel": "noopener"
		},
		{
			"title": "Privacy Policy",
			"link": "#",
			"rel": "noopener"
		},
		{
			"title": "Contact Us",
			"link": "#",
			"rel": "noopener"
		}
	]
}';

$footerMenu = new \Module\Navigation\Builder($footerMenu);
?>

<?= $footerMenu->show(); ?>