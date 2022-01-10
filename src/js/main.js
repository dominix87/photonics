'use strict';

import Sleepy from './classes/sleepy.class.js';
import MainNav from './classes/main-nav.class';
// import $ from 'jquery';
// import slick from "slick-slider";


const SM = new Sleepy();

SM.ready(() => {
  new MainNav('nav.main');

  document.getElementsByTagName('body')[0].className =
    (SM.isTouchDevice()) ? 'touchable' : ''; 
});