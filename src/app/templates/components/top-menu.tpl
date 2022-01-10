<?php

$topMenu = '{
  "pages": [
    {
      "title": "Github222",
      "link": "#",
      "rel": "noopener"
    }, {
      "title": "Documentation22222",
      "link": "#",
      "rel": "noopener"
    }
  ]
}';

$topNav = new \Module\Navigation\Builder($topMenu);
?>

<nav class="top">
  <?= $topNav->show(); ?>
</nav>
