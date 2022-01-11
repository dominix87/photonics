<header>
  <div class="wrapper">
    <div class="logo">
	    <a href="#">
		    <img src="{{ imgLogo }}" alt="">
	    </a>
    </div>
    <div class="rightSide">
	    <div class="textBlock">
		    <div class="topLine">Toll Free: <a href="tel:{{ phoneLink }}">{{ phoneLink }}</a></div>
		    <div class="bottomLine">
            {{ #include components/top-acc-links }}
		    </div>
	    </div>
	    <div class="inputWrapper">
		    <input type="text" placeholder="Quick Search">
	    </div>
    </div>
  </div>
</header>
{{ #include components/main-navigation }}