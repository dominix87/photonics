'use strict';

import Sleepy from './classes/sleepy.class.js';
import MainNav from './classes/main-nav.class';
import $ from 'jquery';
import 'slick-slider';


const SM = new Sleepy();

SM.ready(() => {
  new MainNav('nav.main');

  document.getElementsByTagName('body')[0].className =
    (SM.isTouchDevice()) ? 'touchable' : ''; 
});

$(document).ready(function(){
  $('.sliderBlock').slick({
    slidesToShow: 1,
    dots: true
  });

  var mobBtn = $('.toggle','.mainNavigation');

  $(mobBtn).on('click', function(){
    $('.mainNavigation').toggleClass('opened');
  });



});