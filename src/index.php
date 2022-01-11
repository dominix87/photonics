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
$page->bind(
  [
    "copyright"     =>  "Copyright &copy; 2014 Photonics. All rights reserved",
    "first_title"   =>  "Featured",
    "second_title"  =>  "New Items",
    "third_title"   =>  "Week’s Special Offer.",
    "imgLogo"       =>  "images/logo.png",
    "phoneLink"     =>  "+961 3 336662"
  ]
);

$page->bind(
  "adv",
  [
    [
      "image"   => "images/advImg.jpg",
      "imgalt"  => "image Alt",
      "link"    => "#",
      "title"   => "Week’s Special Offer."
    ],
    [
      "image"   => "images/advImg2.jpg",
      "imgalt"  => "image Alt",
      "link"    => "#",
      "title"   => "Adv."
    ]
  ]
);

$page->bind(
  "partners",
  [
    [
      "image"   =>  "images/logo_1.png",
      "imgalt"  =>  "alt"
    ],
    [
      "image"   =>  "images/logo_2.png",
      "imgalt"  =>  "alt"
    ],
    [
      "image"   =>  "images/logo_3.png",
      "imgalt"  =>  "alt"
    ],
    [
      "image"   =>  "images/logo_4.png",
      "imgalt"  =>  "alt"
    ]
  ]
);

$page->bind(
  "socials",
  [
    [
      "link"    => "#",
      "image"   => "images/twitter_icon.png",
      "imgalt"  => "twitter icon"
    ],
    [
      "link"    => "#",
      "image"   => "images/facebook_icon.png",
      "imgalt"  => "facebook icon"
    ],
    [
      "link"    => "#",
      "image"   => "images/youtube_icon.png",
      "imgalt"  => "youtube icon"
    ]
  ]
);
$page->bind(
  "items",
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

$page->bind(
  "newItems",
  [
    [
      "title"   => "Canon 500mm F4.0<br> L IS II EF AF USM Lens",
      "stock"   => "in stock",
      "img"     => "images/product6.png",
      "imgAlt"  => "imgAlt",
      "price"   => "1,100",
      "link"    => "#"
    ],
    [
      "title"   => "Canon 500mm F4.0<br> L IS II EF AF USM Lens",
      "stock"   => "in stock",
      "img"     => "images/product7.png",
      "imgAlt"  => "imgAlt",
      "price"   => "1,100",
      "link"    => "#"
    ],
    [
      "title"   => "Canon 500mm F4.0<br> L IS II EF AF USM Lens",
      "stock"   => "in stock",
      "img"     => "images/product8.png",
      "imgAlt"  => "imgAlt",
      "price"   => "1,100",
      "link"    => "#"
    ],
    [
      "title"   => "Canon 500mm F4.0<br> L IS II EF AF USM Lens",
      "stock"   => "in stock",
      "img"     => "images/product9.png",
      "imgAlt"  => "imgAlt",
      "price"   => "1,100",
      "link"    => "#",
      "new"     => '1'
    ]
  ]
);

$page->show();
