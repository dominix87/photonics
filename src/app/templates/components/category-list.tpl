<?php

$categoryList = '{
	"pages":[
		{
			"title": "Cameras",
			"link": "#",
			"rel": "noopener"
		},
		{
			"title": "Accessories",
			"link": "#",
			"rel": "noopener"
		},
		{
			"title": "Bags/Cases",
			"link": "#",
			"rel": "noopener"
		},
		{
			"title": "Batteries/Power",
			"link": "#",
			"rel": "noopener"
		},
		{
			"title": "Electronics",
			"link": "#",
			"rel": "noopener"
		},
		{
			"title": "Filters",
			"link": "#",
			"rel": "noopener"
		},
		{
			"title": "Lighting/Studio",
			"link": "#",
			"rel": "noopener"
		},
		{
			"title": "Memory",
			"link": "#",
			"rel": "noopener"
		},
		{
			"title": "Printers",
			"link": "#",
			"rel": "noopener"
		},
		{
			"title": "Tripods",
			"link": "#",
			"rel": "noopener"
		},
		{
			"title": "Video",
			"link": "#",
			"rel": "noopener"
		}
	]
}';

$categoryList = new \Module\Navigation\Builder($categoryList);
?>
<nav class="categoryList">
	<?= $categoryList->show(); ?>
</nav>


