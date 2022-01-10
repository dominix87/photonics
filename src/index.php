<?php
/**
 * Index Page
 *
 * PHP version 7.0.0
 *
 * @category Page 
 * @package  Sleepy
 * @author   Jaime A. Rodriguez <hi.i.am.jaime@gmail.com>
 * @license  http://opensource.org/licenses/MIT; MIT
 * @link     https://sleepymustache.com
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/app/sleepy/bootstrap.php';

use \Sleepy\Core\Template;

$page = new Template('frontpage');

// SEO
$page->bind(
    [
        'title'       => 'Photonics main page',
        'description' => 'Photonics shop',
        'keywords'    => "camera, case, canon, lens"
    ]
);

// Content
$page->bind('header', 'sleepy<span>MUSTACHE</span>');
$page->bind(
    'items',
    [
        [
            "title"   => "Canon 500mm F4.0<br> L IS II EF AF USM Lens",
            "stock"   => "in stock",
            "img"     => "images/product1.png",
            "imgAlt"  => "imgAlt",
            "price"   => "1,800",
            "link"    => "#"
        ],
        [
          "title"   => "Canon 500mm F4.0<br> L IS II EF AF USM Lens",
          "stock"   => "in stock",
          "img"     => "images/product2.png",
          "imgAlt"  => "imgAlt",
          "price"   => "1,700",
          "link"    => "#"
        ],
        [
          "title"   => "Canon 500mm F4.0<br> L IS II EF AF USM Lens",
          "stock"   => "in stock",
          "img"     => "images/product3.png",
          "imgAlt"  => "imgAlt",
          "price"   => "1,900",
          "link"    => "#"
        ],
        [
          "title"   => "Canon 500mm F4.0<br> L IS II EF AF USM Lens",
          "stock"   => "in stock",
          "img"     => "images/product4.png",
          "imgAlt"  => "imgAlt",
          "price"   => "1,800",
          "link"    => "#"
        ],
        [
          "title"   => "Canon 500mm F4.0<br> L IS II EF AF USM Lens",
          "stock"   => "in stock",
          "img"     => "images/product5.png",
          "imgAlt"  => "imgAlt",
          "price"   => "1,720",
          "link"    => "#"
        ],
        [
          "title"   => "Canon 500mm F4.0<br> L IS II EF AF USM Lens",
          "stock"   => "in stock",
          "img"     => "images/product6.png",
          "imgAlt"  => "imgAlt",
          "price"   => "1,760",
          "link"    => "#"
        ]
    ]
);

$page->show();
