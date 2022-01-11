<footer>
  <div class="wrapper">
	  <div class="leftSide">
		  <div class="topText">{{ copyright }}</div>
			{{ #include components/footer-menu }}
	  </div>
	  <div class="rightSide">
		  {{ #each item in socials }}
			  <a href="{{ item.link }}">
				  <img src="{{ item.image }}" alt="{{ item.imgalt }}">
			  </a>
		  {{ /each }}
	  </div>

  </div>
</footer>
